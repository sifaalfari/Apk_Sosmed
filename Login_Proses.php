<?php
// Koneksi ke database
$servername = "localhost";
$username = "db_username"; // Ganti dengan username database Anda
$password = "db_password"; // Ganti dengan password database Anda
$dbname = "db_name"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$username = $_POST["username"];
$password = $_POST["password"];

// Query untuk mencari pengguna dengan username dan password yang sesuai
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Cek apakah data pengguna ditemukan
if ($result->num_rows > 0) {
    echo "Selamat datang, " . $username . "!";
} else {
    echo "Login gagal. Username atau password salah.";
}

$conn->close();
?>
