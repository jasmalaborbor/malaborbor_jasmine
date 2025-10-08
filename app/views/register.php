<?php require_once __DIR__ . '/_head.php'; ?>

<div style="max-width:520px;margin:36px auto">
  <div class="card">
    <h2 class="grad-1"><i class="fas fa-user-plus"></i> Register</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="card" style="margin-top:12px;color:#b91c1c;background:#fff6f6;border-radius:8px;padding:10px"><?php echo html_escape($_SESSION['error']); unset($_SESSION['error']); ?></div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
      <div class="card" style="margin-top:12px;color:#065f46;background:#ecfdf5;border-radius:8px;padding:10px"><?php echo html_escape($_SESSION['success']); unset($_SESSION['success']); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/register'); ?>" method="post" style="margin-top:12px">
      <div class="form-row">
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
          <select class="input" name="role" required>
            <option value="" selected disabled>Select role</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        <?php else: ?>
          <select class="input" name="role" required>
            <option value="user" selected>User</option>
          </select>
        <?php endif; ?>
      </div>
      <div style="margin-top:8px"><input class="input" type="text" name="username" placeholder="Username" required></div>
      <div style="margin-top:8px"><input class="input" type="email" name="email" placeholder="Email" required></div>
      <div style="margin-top:8px"><input class="input" type="password" name="password" placeholder="Password" required></div>
      <div style="margin-top:8px"><input class="input" type="password" name="confirm_password" placeholder="Confirm Password" required></div>
      <div style="margin-top:12px"><button class="btn btn-primary" type="submit"><i class="fas fa-check"></i> Register</button></div>
    </form>

    <div style="margin-top:12px;text-align:center" class="small">Already have an account? <a href="<?= site_url('auth/login'); ?>">Login</a></div>
  </div>
</div>

<?php require_once __DIR__ . '/_footer.php'; ?>
