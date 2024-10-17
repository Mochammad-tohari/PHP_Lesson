<?php

function salam($nama_ku, $lesson)
{

    return "Welcome di  " . $lesson . "," . $nama_ku;

}

function hitung_uang($nominal, $jumlah)
{
    $num = $nominal * $jumlah;
    $money = "Rp " . number_format($num, 2, ",", ".");
    return $money;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>

    <h1><?php echo salam("Mochammad Tohari ", " belajar fungsi"); ?></h1>
    <h1><?php echo hitung_uang(5000, 5); ?></h1>

</body>

</html>