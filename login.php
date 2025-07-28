<?php
require 'koneksi.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $query = "SELECT * FROM tb_akun WHERE email = '$email'";
    $sql = mysqli_query($conn, $query);

    if (mysqli_num_rows($sql) > 0) {
        $result = mysqli_fetch_assoc($sql);
        
        // Pengecekan nomor HP
       
            // Pengecekan password
            if (password_verify($password, $result['password'])) {
                $_SESSION['email'] = $email;
                header("Location: index.php");
                exit();
            } else {
                echo "<script>
                    alert('Password tidak sesuai');
                    window.location.href = 'index.php';
                </script>";
            }
    } else {
        echo "<script>
            alert('Email tidak terdaftar');
            window.location.href = 'index.php';
        </script>";
    }
}
?>