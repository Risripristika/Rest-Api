<!DOCTYPE html>
<html>

<head>
  <title>Form Registrasi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 300px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <h2>Form Registrasi</h2>
  <form action="/register" method="post">
    <div>
      <label for="name">Nama:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div>
      <label for="confirm_password">Konfirmasi Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required>
    </div>
    <div>
      <input type="submit" value="Daftar">
    </div>
  </form>
</body>

</html>