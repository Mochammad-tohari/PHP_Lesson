<?php

/**
 * 
 * FYI
 * $_GET dan $_POST adalah variable super global
 * variable ini membawa banyak data yang terjadi di aplikasi
 * 
 */

// $_GET Passing data melalui URL
// http://localhost/php_lesson/GET_POST.php?nama=Mochammad Tohari&Alamat=Bandung
// Akan Menampilkan 
// array(2) { ["nama"]=> string(16) "Mochammad Tohari" ["Alamat"]=> string(7) "Bandung" }

/**
 * 
 * Passing data Langsung dari file php / code
 */

// $_GET["nama"] = "Mochammad Tohari";
// $_GET["alamat"] = "Bandung";

// var_dump($_GET)

$array_1 = [
    [

        "Nama" => "Mochammad Tohari",
        "Kota" => "Bandung",
        "Kontak" => "012345678",

    ],
    [
        "Nama" => "Nico Robin",
        "Kota" => "Sabaody",
        "Kontak" => "0987654",
    ]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>

        <?php foreach ($array_1 as $person): ?>
            <li>
                <a href="./GET_Page.php
                ?Nama=
                <?= $person['Nama'] ?>
                &Kota=
                <?= $person['Kota'] ?>
                &Kontak=
                <?= $person['Kontak'] ?>">

                    <?= $person['Nama'] ?>
                </a>
            </li>
        <?php endforeach ?>

    </ul>

    <hr />

    <h1>Method POST</h1>

    <form action="./POST_Page.php" method="POST">
        <input type="text" name="username_txt" placeholder="Username">
        <input type="password" name="password_txt" placeholder="password">

        <button type="submit">Kirim</button>
    </form>

    <!-- memberi data tanpa action="./POST_Page.php" -->

    <!-- <?php if (isset($_POST["username_txt"])): ?>
        <h3>Halo <?php echo $_POST["username_txt"] ?></h3>
    <?php endif; ?> -->
    <!-- End memberi data tanpa action="./POST_Page.php" -->

</body>

</html>