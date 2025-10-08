<?php require_once __DIR__ . '/_head.php'; ?>

<div style="max-width:480px;margin:40px auto">
  <div class="card">
    <h2 class="grad-1">Reset Password</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="card" style="margin-top:12px;color:#b91c1c;background:#fff6f6;border-radius:8px;padding:10px"><?php echo html_escape($_SESSION['error']); unset($_SESSION['error']); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/reset-password/' . html_escape($token)); ?>" method="post" style="margin-top:12px">
      <input class="input" type="password" name="password" placeholder="New password" required>
      <input class="input" type="password" name="confirm_password" placeholder="Confirm password" required style="margin-top:8px">
      <div style="margin-top:12px"><button class="btn btn-primary" type="submit">Reset password</button></div>
    </form>

    <div style="margin-top:12px"><a href="<?= site_url('auth/login'); ?>" class="small">Back to login</a></div>
  </div>
</div>

<?php require_once __DIR__ . '/_footer.php'; ?>
