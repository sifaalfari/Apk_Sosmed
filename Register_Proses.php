<?php
// Koneksi ke database (sama seperti login_process.php)
// ...

// Ambil data dari form registrasi
$username = $_POST["username"];
$password = $_POST["password"];

// Query untuk memeriksa apakah username sudah ada di database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Username sudah ada, coba lagi.";
} else {
    // Jika username belum ada, lakukan proses registrasi
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil. Silakan login.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
