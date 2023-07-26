<!DOCTYPE html>
<html>
<head>
    <title>Instagram-like App</title>
    <link rel="stylesheet" href="Apk_Sosmed/bootstrap.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">Instagram-like App</a>
<body>
<div class="container">
        <?php
        session_start();

        // Cek apakah pengguna sudah login
        if (isset($_SESSION['user_id'])) {
            // Konten setelah login
            echo '<h1>Welcome, ' . $_SESSION['username'] . '!</h1>';
            echo '<p>Ini adalah konten setelah login. Anda dapat menambahkan konten yang sesuai dengan status login di sini.</p>';
            echo '<a href="logout.php">Logout</a>'; // Tambahkan tautan untuk logout jika diperlukan
        } else {
            // Konten sebelum login
            echo '<h1>Welcome to Instagram-like App</h1>';
            echo '<p>Selamat datang di aplikasi kami yang mirip dengan Instagram. Silakan login atau daftar untuk melanjutkan.</p>';
            echo '<a href="login.php">Login</a> atau <a href="register.php">Register</a>';
        }
        ?>
        <div class="container text-center">
            <p>&copy; 2023 Instagram-like App. All rights reserved.</p>
        </div>
    </footer>

    </div>

    <script src="path_to_bootstrap/bootstrap.min.js"></script>
</body>
</html>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-image: url("Faris123.jpg");
    background-size: cover;
    background-position: center;
  }
  
  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
  }
  
  h1 {
    text-align: center;
  }
  
  button {
    display: block;
    margin-top: 20px;
  }
  </style>
    <script src="path_to_bootstrap/bootstrap.min.js"></script>
</body>
</html>
    <script src="Apk_sosmed/bootstrap.min.js"></script>
</body>
</html>