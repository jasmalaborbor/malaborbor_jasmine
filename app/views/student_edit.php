<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      /* Soft pastel gradient background */
      background: linear-gradient(135deg, #f8cdda 0%, #1d2b64 100%);
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .page-title {
      color: #1d2b64;
      font-size: 2.4rem;
      font-weight: bold;
      margin: 0;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 20px;
      padding: 2.5rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      max-width: 600px;
      width: 100%;
      backdrop-filter: blur(10px);
    }

    .form-label {
      color: #333;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .form-control {
      border: 2px solid #ddd;
      border-radius: 10px;
      padding: 12px 15px;
      font-size: 1rem;
      background-color: #f8f8f8;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #8e9ffa;
      background-color: #fff;
      box-shadow: 0 0 0 0.25rem rgba(142, 159, 250, 0.3);
    }

    .btn-update {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      border: none;
      border-radius: 10px;
      padding: 12px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(118, 75, 162, 0.3);
    }

    .btn-update:hover {
      background: linear-gradient(135deg, #5a67d8, #6b46c1);
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(118, 75, 162, 0.4);
    }

    .btn-cancel {
      background-color: transparent;
      color: #764ba2;
      border: 2px solid #764ba2;
      border-radius: 10px;
      padding: 12px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-cancel:hover {
      background: #764ba2;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(118, 75, 162, 0.3);
    }

    .logout-btn {
      background: linear-gradient(135deg, #f5576c, #f093fb);
      color: white;
      border-radius: 8px;
      padding: 8px 16px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 3px 8px rgba(240, 147, 251, 0.3);
    }

    .logout-btn:hover {
      background: linear-gradient(135deg, #e63946, #d46cfb);
      transform: translateY(-1px);
      color: white;
    }

    .header-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="header-section">
      <h1 class="page-title">Edit User</h1>
      <a href="<?= site_url('auth/logout'); ?>" class="logout-btn">Logout</a>
    </div>

    <form method="post" action="">
      <div class="mb-4">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="<?= html_escape($student['first_name']); ?>" required />
      </div>
      <div class="mb-4">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="<?= html_escape($student['last_name']); ?>" required />
      </div>
      <div class="mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= html_escape($student['email']); ?>" required />
      </div>
      <div class="d-flex gap-3">
        <button type="submit" class="btn btn-update">Update User</button>
        <a href="<?= site_url('author'); ?>" class="btn btn-cancel">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>
