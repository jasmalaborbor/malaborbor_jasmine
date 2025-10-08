<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
<body>
    <div class="card-box">
        <h2 class="title">Reset Password</h2>
<?php require_once __DIR__ . '/_head.php'; ?>

<div style="max-width:480px;margin:40px auto">
  <div class="card">
    <h2 class="grad-1"><i class="fas fa-key"></i> Reset Password</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="card" style="margin-top:12px;color:#b91c1c;background:#fff6f6;border-radius:8px;padding:10px"><?php echo html_escape($_SESSION['error']); unset($_SESSION['error']); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/reset-password/' . html_escape($token)); ?>" method="post" style="margin-top:12px">
      <input class="input" type="password" name="password" placeholder="New password" required>
      <input class="input" type="password" name="confirm_password" placeholder="Confirm password" required style="margin-top:8px">
      <div style="margin-top:12px"><button class="btn btn-primary" type="submit"><i class="fas fa-check"></i> Reset password</button></div>
    </form>

    <div style="margin-top:12px"><a href="<?= site_url('auth/login'); ?>" class="small"><i class="fas fa-arrow-left"></i> Back to login</a></div>
  </div>
</div>

<?php require_once __DIR__ . '/_footer.php'; ?>
            <a href="<?= site_url('auth/login'); ?>">Back to login</a>

        </div>

    </div>
