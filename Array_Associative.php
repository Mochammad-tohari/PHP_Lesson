<!-- Array associative adalah array yang memiliki array didalamnya -->

<?php

$array_main = [
    ["Senin", "Selasa", "Rabu"],
    ["Januari", "Februari", "Maret"],
    ["2020", "2021", "2022"],
];

// foreach ($array_main as $data) {
//     var_dump($data);
// }

$data_person = [
    [
        "nama" => "Mochammad Tohari",
        "kota" => "Bandung",
        "hobi" => "Gaming",
        "makanan_favorit" => ["Sayur", "Daging", "Buah"]
    ],

    [
        "nama" => "Usop",
        "kota" => "Fusha",
        "hobi" => "Slingshot",
        "makanan_favorit" => ["Sate", "Soto"]
    ],

    [
        "nama" => "Luffy",
        "kota" => "Fusha",
        "hobi" => "Eat",
        "makanan_favorit" => ["Nasi Padang"]
    ],
];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>

<body>


    <!-- <?php foreach ($array_main as $data): ?>
            <ul style="margin-bottom: 24px"></ul>
            <li>Index : 0 <?= $data[0] ?></li>
            <li>Index : 1 <?= $data[1] ?></li>
            <li>Index : 2 <?= $data[2] ?></li>
            </ul>
    <?php endforeach ?> -->

    <!-- <?php

    echo $data_person[0]['Nama'];

    ?> -->

    <?php foreach ($data_person as $data): ?>
        <ul style="margin-bottom: 24px">
            <li>Nama: <?php echo $data['nama']; ?></li>
            <li>Kota: <?php echo $data['kota']; ?></li>
            <li>Hobi: <?php echo $data['hobi']; ?></li>
            <li>
                Makanan Favorit:
                <ol>
                    <?php foreach ($data['makanan_favorit'] as $makanan): ?>
                        <li><?php echo $makanan; ?></li>
                    <?php endforeach; ?>
                </ol>
            </li>
        </ul>
    <?php endforeach; ?>


</body>

</html>