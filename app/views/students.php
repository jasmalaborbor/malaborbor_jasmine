<?php require_once __DIR__ . '/_head.php'; ?>

<div class="card">
  <div class="card" style="padding:14px; display:flex; align-items:center; gap:12px">
    <h2 class="grad-1" style="margin:0"><i class="fas fa-users" style="margin-right:8px"></i> Users</h2>
    <div style="margin-left:auto;">
      <?php if (isset($_SESSION['role']) && in_array($_SESSION['role'], ['user','admin'])): ?>
        <a class="btn btn-accent" href="<?= site_url('student/create'); ?>"><i class="fas fa-plus"></i> Create</a>
      <?php endif; ?>
    </div>
  </div>

  <div style="margin-top:12px">
    <div class="card">
      <form action="<?= site_url('author'); ?>" method="get" class="form-row">
        <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
        <input class="input" name="q" type="text" placeholder="Search..." value="<?= html_escape($q); ?>">
        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
      </form>
    </div>

    <div class="card" style="margin-top:12px">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (html_escape($all) as $index => $author): ?>
            <tr>
              <td><?= $index + 1; ?></td>
              <td><?= $author['first_name'] . ' ' . $author['last_name']; ?></td>
              <td><?= $author['email']; ?></td>
              <td>
                <?php if ($_SESSION['role'] === 'admin'): ?>
                  <a href="<?= site_url('student/edit/'.$author['id']); ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                  <a href="<?= site_url('student/delete/'.$author['id']); ?>" class="btn btn-accent" onclick="return confirm('Are you sure you want to delete this user?');"><i class="fas fa-trash"></i> Delete</a>
                <?php else: ?>
                  <span class="small">No actions</span>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div style="margin-top:12px;text-align:center">
      <?= $page; ?>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/_footer.php'; ?>
