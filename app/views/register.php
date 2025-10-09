<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    body {
      background: linear-gradient(135deg, #A8E6CF, #DCEDC1, #FFD3B6, #FFAAA5);
      background-size: 400% 400%;
      animation: gradientMove 10s ease infinite;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
      padding: 2rem 0;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .register-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
      padding: 2.5rem;
      width: 100%;
      max-width: 480px;
      transition: 0.3s;
    }

    .register-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
    }

    .register-title {
      background: linear-gradient(to right, #b9b543ff, #615808ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 800;
      font-size: 2.2rem;
      text-align: center;
      margin-bottom: 1.8rem;
    }

    .form-group {
      margin-bottom: 1.4rem;
      position: relative;
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

    .btn-register {
      background: linear-gradient(to right, #f446a6ff, #ce4fc3ff);
      color: #fff;
      border: none;
      border-radius: 12px;
      padding: 12px;
      font-size: 1.1rem;
      font-weight: 600;
      width: 100%;
      box-shadow: 0 8px 20px rgba(56, 142, 60, 0.3);
      transition: all 0.25s ease;
    }

    .btn-register:hover {
      background: linear-gradient(to right, #2e5879ff, #3f9cceff);
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(56, 142, 60, 0.4);
    }

    .login-link {
      text-align: center;
      margin-top: 1.5rem;
      color: #555;
    }

    .login-link a {
      color: #7d0d7fff;
      text-decoration: none;
      font-weight: 600;
    }

    .login-link a:hover {
      text-decoration: underline;
      color: #6e35beff;
    }

    .alert {
      border-radius: 12px;
      border: 1px solid #C8E6C9;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="register-card">
    <h2 class="register-title">Create Account 🌱</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="alert alert-danger" role="alert">
        <?= html_escape($_SESSION['error']); ?>
        <?php unset($_SESSION['error']); ?>
      </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
      <div class="alert alert-success" role="alert">
        <?= html_escape($_SESSION['success']); ?>
        <?php unset($_SESSION['success']); ?>
      </div>
    <?php endif; ?>

    <form action="<?= site_url('auth/register'); ?>" method="post">
      <div class="form-group">
        <label class="form-label">Role</label>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
          <select class="form-select" name="role" required>
            <option value="" selected disabled>Select</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        <?php else: ?>
          <select class="form-select" name="role" required>
            <option value="" selected disabled>Select</option>
            <option value="user">User</option>
          </select>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required />
      </div>

      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required />
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required />
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required />
      </div>

      <button type="submit" class="btn btn-register">Register</button>
    </form>

    <div class="login-link">
      Already have an account? <a href="<?= site_url('auth/login'); ?>">Login</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
