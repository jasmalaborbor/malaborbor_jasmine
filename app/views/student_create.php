<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create New User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* ✨ Background Gradient Animation (soft pastel like login page) */
    body {
      background: linear-gradient(135deg, #f8cdda, #1d2b64, #a18cd1, #fbc2eb);
      background-size: 400% 400%;
      animation: gradientShift 10s ease infinite;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
      padding: 2rem;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .form-container {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      padding: 2.5rem;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
      max-width: 620px;
      width: 100%;
      transition: 0.3s;
    }

    .form-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
    }

    .page-title {
      background: linear-gradient(to right, #667eea, #764ba2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 2.4rem;
      font-weight: 800;
      margin: 0;
    }

    .header-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .logout-btn {
      background: linear-gradient(135deg, #f5576c, #f093fb);
      color: white;
      border-radius: 10px;
      padding: 8px 18px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
      box-shadow: 0 4px 12px rgba(240, 147, 251, 0.3);
    }

    .logout-btn:hover {
      background: linear-gradient(135deg, #e63946, #d46cfb);
      transform: translateY(-2px);
      color: white;
      box-shadow: 0 6px 18px rgba(240, 147, 251, 0.4);
    }

    .form-label {
      color: #333;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .form-control {
      border: none;
      border-radius: 12px;
      background-color: rgba(240, 240, 255, 0.9);
      padding: 12px 15px;
      font-size: 1rem;
      transition: 0.3s;
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05);
    }

    .form-control:focus {
      background-color: #ffffff;
      box-shadow: 0 0 0 0.25rem rgba(142, 159, 250, 0.3);
    }

    .btn-create {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: #fff;
      border: none;
      border-radius: 12px;
      padding: 12px 28px;
      font-weight: 600;
      transition: 0.25s;
      box-shadow: 0 8px 20px rgba(118, 75, 162, 0.3);
    }

    .btn-create:hover {
      background: linear-gradient(135deg, #5a67d8, #6b46c1);
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(118, 75, 162, 0.4);
    }

    .btn-cancel {
      background: transparent;
      color: #764ba2;
      border: 2px solid #764ba2;
      border-radius: 12px;
      padding: 12px 28px;
      font-weight: 600;
      transition: 0.25s;
    }

    .btn-cancel:hover {
      background-color: #764ba2;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(118, 75, 162, 0.3);
    }

    .d-flex.gap-3 {
      gap: 1rem !important;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="header-section">
      <h1 class="page-title">Create New User ✨</h1>
      <a href="<?= site_url('auth/logout'); ?>" class="logout-btn">Logout</a>
    </div>

    <form method="post" action="">
      <div class="mb-4">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" required />
      </div>
      <div class="mb-4">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" required />
      </div>
      <div class="mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required />
      </div>

      <div class="d-flex gap-3">
        <button type="submit" class="btn btn-create">Create User</button>
        <a href="<?= site_url('author'); ?>" class="btn btn-cancel">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>
