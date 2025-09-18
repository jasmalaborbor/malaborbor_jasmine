<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User View</title>
  <style>
    body {
      font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f7fb;
      margin: 0;
      padding: 20px;
      color: #333;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      font-weight: 600;
      color: #2c3e50;
    }

    .create-btn {
      display: inline-block;
      margin-bottom: 20px;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      color: white;
      padding: 12px 24px;
      border-radius: 30px;
      font-weight: bold;
      font-size: 15px;
      text-decoration: none;
      box-shadow: 0 4px 12px rgba(0, 100, 200, 0.25);
      transition: all 0.3s ease;
    }

    .create-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(0, 100, 200, 0.35);
    }

    table {
      width: 85%;
      margin: 0 auto;
      border-collapse: collapse;
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 16px 20px;
      text-align: center;
      font-size: 15px;
    }

    th {
      background: #2c3e50;
      color: #fff;
      text-transform: uppercase;
      font-size: 14px;
      letter-spacing: 0.5px;
    }

    tr:nth-child(even) {
      background: #f9fbfd;
    }

    tr:hover {
      background: #eaf3ff;
      transition: 0.3s;
    }

    .action-btn {
      display: inline-block;
      padding: 6px 14px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
    }

    .edit-btn {
      background: #00c6ff;
      color: #fff;
      margin-right: 8px;
      box-shadow: 0 2px 6px rgba(0, 198, 255, 0.3);
    }

    .edit-btn:hover {
      background: #0096cc;
    }

    .delete-btn {
      background: #ff4d6d;
      color: #fff;
      box-shadow: 0 2px 6px rgba(255, 77, 109, 0.3);
    }

    .delete-btn:hover {
      background: #d6336c;
    }
  </style>
</head>
<body>
  <h1>👥 User Management</h1>

  <div style="width: 85%; margin: 0 auto 25px auto; text-align: right;">
    <a href="<?= site_url('user/create'); ?>" class="create-btn">+ Create New User</a>
  </div>

  <table>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Action</th>
    </tr>

    <?php foreach ($users as $user): ?>
      <tr>
        <td><?= $user['id']; ?></td>
        <td><?= $user['username']; ?></td>
        <td><?= $user['email']; ?></td>
        <td>
          <a href="<?= site_url('user/update/'.$user['id']); ?>" class="action-btn edit-btn">Edit</a>
          <a href="<?= site_url('user/delete/'.$user['id']); ?>" class="action-btn delete-btn"
             onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
