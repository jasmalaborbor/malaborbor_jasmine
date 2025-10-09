<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #A8E6CF, #DCEDC1, #FFD3B6, #FFAAA5);
      background-size: 400% 400%;
      animation: gradientBG 10s ease infinite;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .login-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
      padding: 2.5rem;
      width: 100%;
      max-width: 420px;
      transition: 0.3s;
    }

    .login-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
    }

    .login-title {
      background: linear-gradient(to right, #9ca019ff, #fad622ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 800;
      font-size: 2.2rem;
      text-align: center;
      margin-bottom: 1.8rem;
    }

    .form-group {
      margin-bottom: 1.25rem;
    }

    .form-control,
    .form-select {
      border: none;
      border-radius: 12px;
      background-color: rgba(232, 245, 233, 0.8);
      padding: 12px 15px;
      font-size: 1rem;
      transition: 0.3s;
      box-shadow: inset 0 0 5px rgba(56, 142, 60, 0.1);
    }

    .form-control:focus,
    .form-select:focus {
      background-color: #ffffff;
      box-shadow: 0 0 0 0.2rem rgba(56, 142, 60, 0.3);
    }

    .btn-login {
      background: linear-gradient(to right, #ded962ff, #bb9c66ff);
      color: #fff;
      border: none;
      border-radius: 12px;
      padding: 12px;
      font-size: 1.1rem;
      font-weight: 600;
      width: 100%;
      box-shadow: 0 8px 20px rgba(198, 124, 64, 0.3);
      transition: all 0.25s ease;
    }

    .btn-login:hover {
      background: linear-gradient(to right, #c09f4cff, #a28f4aff);
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(192, 129, 57, 0.4);
    }

    .register-link {
      text-align: center;
      margin-top: 1rem;
      color: #e52f63ff;
    }

    .register-link a {
      color: #db2675ff;
      font-weight: 600;
      text-decoration: none;
    }

    .register-link a:hover {
      text-decoration: underline;
      color: #d73568ff;
    }

    .alert {
      border-radius: 12px;
      border: 1px solid #C8E6C9;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h2 class="login-title">Welcome Back 🌿</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="alert alert-danger" role="alert">
        <?= html_escape($_SESSION['error']); ?>
        <?php unset($_SESSION['error']); ?>
      </div>
    <?php endif; ?>

    <form action="<?= site_url('auth/login'); ?>" method="post">
      <div class="form-group">
        <label class="form-label">Role</label>
        <select class="form-select" name="role" required>
          <option value="" selected disabled>Select</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn btn-login">Login</button>
    </form>

    <div class="register-link">
      <a href="<?= site_url('auth/forgot-password'); ?>">Forgot password?</a>
    </div>

    <div class="register-link">
      Don’t have an account? <a href="<?= site_url('auth/register'); ?>">Register</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
