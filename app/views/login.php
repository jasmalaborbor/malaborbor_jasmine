<?php require_once __DIR__ . '/_head.php'; ?>

<div style="max-width:420px;margin:40px auto">
  <div class="card">
    <h2 class="grad-1"><i class="fas fa-sign-in-alt"></i> Login</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="card" style="margin-top:12px;color:#b91c1c;background:#fff6f6;border-radius:8px;padding:10px"><?php echo html_escape($_SESSION['error']); unset($_SESSION['error']); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/login'); ?>" method="post" style="margin-top:12px">
      <div class="form-row">
        <select class="input" name="role" required>
          <option value="" selected disabled>Select role</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <div style="margin-top:8px"><input class="input" type="text" name="username" placeholder="Username" required></div>
      <div style="margin-top:8px"><input class="input" type="password" name="password" placeholder="Password" required></div>
      <div style="margin-top:12px"><button type="submit" class="btn btn-primary"><i class="fas fa-arrow-right"></i> Login</button></div>
    </form>

    <div style="margin-top:12px;text-align:center">
      <a href="<?= site_url('auth/forgot-password'); ?>" class="small">Forgot password?</a>
      <div class="small">Don't have an account? <a href="<?= site_url('auth/register'); ?>">Register</a></div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/_footer.php'; ?>
