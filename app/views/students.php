<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome to Profile View</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f6f2fb;
      background-image: url('assets/images/minsu_logo-removebg-preview.png');
      background-repeat: no-repeat;
      background-position: center;
      background-size: 280px;
      background-attachment: fixed;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #4b3d60;
    }

    .page-title {
      color: #6c4ba5;
      font-size: 2.5rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 2rem;
      text-shadow: 1px 1px 2px #ffffff;
    }

    .create-btn {
      background-color: #8b6ccf;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 10px 18px;
      font-weight: 600;
      transition: 0.3s ease;
    }

    .create-btn:hover {
      background-color: #6d4db8;
    }

    .profile-table {
      overflow: hidden;
      border-radius: 16px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-top: 20px;
      background-color: white;
    }

    .table-header {
      background-color: #8b6ccf;
      color: white;
      text-transform: uppercase;
      font-weight: bold;
    }

    .table-header th {
      padding: 14px;
      border: none;
    }

    .table-body tr:nth-child(odd) {
      background-color: #f3eefe;
    }

    .table-body tr:nth-child(even) {
      background-color: #ffffff;
    }

    .table-body tr:hover {
      background-color: #e4d9fa !important;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    .table-body td {
      padding: 14px;
      border: none;
      color: #4b3d60;
    }

    .edit-btn {
      background-color: #8b6ccf;
      color: white;
      border: none;
      border-radius: 20px;
      padding: 6px 16px;
      font-weight: 600;
      transition: 0.3s;
    }

    .edit-btn:hover {
      background-color: #6d4db8;
    }

    .delete-btn {
      background-color: #e57373;
      color: white;
      border: none;
      border-radius: 20px;
      padding: 6px 16px;
      font-weight: 600;
      transition: 0.3s;
    }

    .delete-btn:hover {
      background-color: #d9534f;
    }

    .logout-btn {
      background-color: #e57373;
      color: white;
      border-radius: 8px;
      padding: 8px 16px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s ease;
    }

    .logout-btn:hover {
      background-color: #d9534f;
    }

    .search-container {
      background: white;
      border-radius: 10px;
      padding: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }

    .search-btn {
      background-color: #8b6ccf;
      border: none;
      border-radius: 8px;
      color: white;
      font-weight: 600;
    }

    .search-btn:hover {
      background-color: #6d4db8;
    }
  </style>
</head>

<body>
<div class="container py-4">
  <h1 class="page-title">Welcome to Profile View</h1>

  <div class="search-container">
    <div class="row align-items-center">
      <div class="col-md-8">
        <form action="<?= site_url('author'); ?>" method="get" class="d-flex">
          <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
          <input class="form-control me-2" name="q" type="text" placeholder="Search..." value="<?= html_escape($q); ?>" style="border-radius: 8px;">
          <button type="submit" class="btn search-btn">Search</button>
        </form>
      </div>
      <div class="col-md-2 text-center">
        <?php if (isset($_SESSION['role']) && in_array($_SESSION['role'], ['user', 'admin'])): ?>
          <a href="<?= site_url('student/create'); ?>" class="btn create-btn">&#43; Create New User</a>
        <?php endif; ?>
      </div>
      <div class="col-md-2 text-end">
        <a href="<?= site_url('auth/logout'); ?>" class="logout-btn">Logout</a>
      </div>
    </div>
  </div>

  <div class="profile-table">
    <table class="table mb-0">
      <thead class="table-header">
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-body">
        <?php foreach (html_escape($all) as $index => $author): ?>
          <tr>
            <td><?= $index + 1; ?></td>
            <td><?= $author['first_name'] . ' ' . $author['last_name']; ?></td>
            <td><?= $author['email']; ?></td>
            <td>
              <?php if ($_SESSION['role'] === 'admin'): ?>
                <a href="<?= site_url('student/edit/'.$author['id']); ?>" class="btn action-btn edit-btn">Edit</a>
                <a href="<?= site_url('student/delete/'.$author['id']); ?>" class="btn action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
              <?php else: ?>
                <span class="text-muted">No actions</span>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="text-center mt-3">
    <?= $page; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
