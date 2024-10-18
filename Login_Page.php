<?php

session_start(); //Untuk memulai sesi

if (isset($_SESSION['username'])) {
    header("location: ./Dashboard_Page.php");
    exit();
}

// membuat akun secara hard code
$user = [
    "User_1" => "User123",
    "User_2" => "User321",
];
// end membuat akun secara hard code


// mengecek akun
if (isset($_POST['Submit_Login'])) {

    $username = $_POST['Username_Txt'];
    $password = $_POST['Password_Txt'];


    if (isset($user[$username]) && $user[$username] === $password) {
        // Konisi true
        $_SESSION['username'] = $username;
        header("location: ./Dashboard_Page.php");
    } else {
        // Kondisi false
        $error_login = "Username atau Password salah";

    }
    // end mengecek akun

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <!-- Memberi pesan error login -->
    <?php if (isset($error_login)): ?>
        <p style="color: red; margin-bottom: 8px;"><?php echo $error_login ?></p>
    <?php endif; ?>
    <!-- End Memberi pesan error login -->

    <section>

        <div class="Form_Inputan">

            <form action="" method="POST">

                <div style="margin-bottom: 16px;">
                    <label for="Username_Txt" style="margin-bottom: 8px; display: block;">Username</label>
                    <input type="text" name="Username_Txt" placeholder="Username">
                </div>

                <div style="margin-bottom: 16px;">
                    <label for="Password_Txt" style="margin-bottom: 8px; display: block;">Password</label>
                    <input type="password" name="Password_Txt" placeholder="Password">
                </div>

                <div style="margin-bottom: 16px;">
                    <button type="submit" name="Submit_Login">Submit</button>
                </div>

            </form>

        </div>

    </section>



</body>

</html>