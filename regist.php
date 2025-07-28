<?php
require('koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   

    $query = "SELECT * FROM tb_akun WHERE email = '$email'";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);

    if($result){
        $_SESSION['log'] = "email sudah di gunakan !";
        header('location: daftar.php');
    } else {
         $query = "INSERT INTO tb_akun(email, password) VALUES ('$email','$password')";

    if ($conn->query($query) === TRUE) {
        // echo "akun berhasil di daftarkan";
        echo "<script>
                    alert('akun berhasil di daftarkan silahkan login');
                    window.location.href = 'formlogin.php';
                </script>";
    }
    }
    

   
    $conn->close();
}
?>
