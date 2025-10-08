<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e8f5e8; min-height: 100vh; display: flex; align-items: center; justify-content: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card-box { background: white; border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); padding: 2rem; width: 100%; max-width: 420px; }
        .title { color: #2d5a2d; font-weight: 700; text-align: center; margin-bottom: 1rem; }
        .btn-submit { background-color: #2d5a2d; border: none; border-radius: 10px; padding: 12px; width: 100%; color: #fff; font-weight: 600; }
        .btn-submit:hover { background-color: #1e3f1e; }
        .back-link { text-align: center; margin-top: 1rem; }
        .back-link a { color: #2d5a2d; text-decoration: none; font-weight: 600; }
        .alert { border-radius: 10px; }
    </style>
    </head>
<?php require_once __DIR__ . '/_head.php'; ?>

<div style="max-width:480px;margin:40px auto">
  <div class="card">
    <h2 class="grad-1">Forgot Password</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="card" style="margin-top:12px;color:#b91c1c;background:#fff6f6;border-radius:8px;padding:10px"><?php echo html_escape($_SESSION['error']); unset($_SESSION['error']); ?></div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
      <div class="card" style="margin-top:12px;color:#065f46;background:#ecfdf5;border-radius:8px;padding:10px"><?php echo html_escape($_SESSION['success']); unset($_SESSION['success']); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/forgot-password'); ?>" method="post" style="margin-top:12px">
      <input class="input" type="email" name="email" placeholder="Enter your email" required>
      <div style="margin-top:12px"><button class="btn btn-primary" type="submit">Send reset link</button></div>
    </form>

    <div style="margin-top:12px"><a href="<?= site_url('auth/login'); ?>" class="small">Back to login</a></div>
  </div>
</div>

<?php require_once __DIR__ . '/_footer.php'; ?>
    <?php require_once __DIR__ . '/_footer.php'; ?>
