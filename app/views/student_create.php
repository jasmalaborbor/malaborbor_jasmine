<?php require_once __DIR__ . '/_head.php'; ?>

<div class="card">
  <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px">
    <h2 class="grad-1" style="margin:0"><i class="fas fa-user-plus"></i> Create User</h2>
    <div style="margin-left:auto">
      <a href="<?= site_url('author'); ?>" class="btn"> <i class="fas fa-arrow-left"></i> Back</a>
    </div>
  </div>

  <div class="card">
    <form method="post" action="">
      <div class="form-row">
        <input class="input" type="text" id="first_name" name="first_name" placeholder="First name" required>
        <input class="input" type="text" id="last_name" name="last_name" placeholder="Last name" required>
      </div>
      <div style="margin-top:12px">
        <input class="input" type="email" id="email" name="email" placeholder="Email" required>
      </div>
      <div style="margin-top:12px;display:flex;gap:8px">
        <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Create</button>
        <a href="<?= site_url('author'); ?>" class="btn">Cancel</a>
      </div>
    </form>
  </div>
</div>

<?php require_once __DIR__ . '/_footer.php'; ?>
</html>
