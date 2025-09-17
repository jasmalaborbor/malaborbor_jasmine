<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PCreate</title>
  <style>
    /* Background Gradient */
    body {
      font-family: "Poppins", Arial, sans-serif;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
     background: linear-gradient(120deg, #0e3d22ff, #227946ff);
    }

    /* Card Container */
    .container {
      background: #fff;
      padding: 40px 35px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      width: 380px;
      text-align: center;
      animation: fadeIn 0.7s ease;
    }

    h1 {
      margin-bottom: 25px;
      font-size: 24px;
      font-weight: 600;
      color: #333;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 6px;
      font-weight: 500;
      color: #444;
      font-size: 14px;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: 1.5px solid #ddd;
      border-radius: 10px;
      outline: none;
      font-size: 15px;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="number"]:focus {
      border-color: #66a6ff;
      box-shadow: 0 0 6px rgba(102,166,255,0.5);
    }

    input[type="submit"] {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #11cb8dff, #93cea5ff);
      border: none;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    input[type="submit"]:hover {
      transform: translateY(-2px);
      background: linear-gradient(135deg, #0aad7cff, #b5d6d5ff);
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    .back-link {
      display: block;
      margin-top: 20px;
      color: #2575fc;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      transition: 0.3s;
    }

    .back-link:hover {
      text-decoration: underline;
      color: #6a11cb;
    }

    /* Simple fade animation */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Create New Profile</h1>
    <form action="" method="post">
      <label for="user_name">User Name:</label>
      <input type="text" id="user_name" name="user_name" placeholder="Enter your name" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" placeholder="Enter your age" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" placeholder="Enter your address" required>

      <input type="submit" value="Create Profile">
    </form>
  </div>
</body>
</html>
