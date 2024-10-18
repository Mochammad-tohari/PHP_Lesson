<?php

session_start();

// pengecekan akun jika akun salah maka akan tetap di page Login_Page
if (!isset($_SESSION['username'])) {
    header("location: ./Login_Page.php");
    exit();
}

// End pengecekan akun jika akun salah maka akan tetap di page Login_Page

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <?php echo $_SESSION['username']; ?>

    <a href="./Logout_Page.php">Logout</a>
</body>

</html>