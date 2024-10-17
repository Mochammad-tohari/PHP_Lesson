<?php
// Jenis2 penulisan array
// Cara 1
$array_1 = array("Senin", "Selasa", "Rabu", "Kamis");

// Cara 2
$array_2 = ["Senin", "Selasa", "Rabu"];

// untuk pemanggilan array gunakan var_dump atau print_r untuk developer
echo "Menggunakan var_dump ";
echo "<br/>";
var_dump($array_1);
echo "<br/>";
echo "<hr />";

echo "Menggunakan print_r ";
echo "<br/>";
print_r($array_2);
echo "<br/>";
echo "<hr />";

// pemanggilan array biasa
echo "pemanggilan array biasa ";
echo "<br/>";
echo $array_1[1];
echo "<br/>";
echo "<hr />";

// pemanggilan array biasa menggunakan for loop
// Cara ke 1
echo "pemanggilan array biasa menggunakan for loop Cara ke-1 ";
echo "<br/>";
for ($i = 0; $i < count($array_1); $i++) {
    echo $array_1[$i] . "<br/>";
}
echo "<br/>";
echo "<hr />";

// Cara ke 2
echo "pemanggilan array biasa menggunakan for loop Cara ke-2 ";
echo "<br/>";
foreach ($array_1 as $hari) {
    echo $hari . "<br/>";
}
echo "<br/>";
echo "<hr />";



?>