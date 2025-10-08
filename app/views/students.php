<?php require_once __DIR__ . '/_head.php'; ?>

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

<?php require_once __DIR__ . '/_footer.php'; ?>
