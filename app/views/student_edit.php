<?php require_once __DIR__ . '/_head.php'; ?>

  <div class="container py-4">
    <div class="form-container">
      <div class="header-section">
        <h1 class="page-title">Edit User</h1>
        <a href="<?= site_url('auth/logout'); ?>" class="logout-btn">Logout</a>
      </div>

      <form method="post" action="">
        <div class="mb-4">
          <label for="first_name" class="form-label">First Name</label>
          <input type="text" class="form-control" id="first_name" name="first_name" value="<?= html_escape($student['first_name']); ?>" required />
        </div>
        <div class="mb-4">
          <label for="last_name" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="last_name" name="last_name" value="<?= html_escape($student['last_name']); ?>" required />
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?= html_escape($student['email']); ?>" required />
        </div>
        <div class="d-flex gap-3">
          <button type="submit" class="btn btn-update">Update User</button>
          <a href="<?= site_url('author'); ?>" class="btn btn-cancel">Cancel</a>
        </div>
      </form>
    </div>
  </div>

<?php require_once __DIR__ . '/_footer.php'; ?>
