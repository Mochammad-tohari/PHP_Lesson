<?php

// menyambungkan ke html

$nama_ku = "Mochammad Tohari";
$umur_ku = "1000";
$birthdate = "01-01-2000"

    // end menyambungkan ke html

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
        <li>Nama : <?php echo $nama_ku; ?> </li>
        <li>Umur : <?php echo $umur_ku; ?> </li>
        <!-- ?= sama dengan php echo tapi hanya berlaku di echo-->
        <li>Tgl Lahir : <?= $birthdate; ?> </li>
        <li>5 x 5 = <?= 5 * 5; ?></li>
    </ul>
</body>

</html>