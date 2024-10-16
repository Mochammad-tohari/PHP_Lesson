<?php

// Standard output PHP

// Cara Menampilkan Tulisan

// \n untuk membuat baris baru
// Menggabungkan 2 string atau yulisan gunakan " . " 
echo "Mochammad Tohari " . "(Mengggunakan Echo)\n";

echo "<br/>";

//ini echo string untuk menampilkan full text
echo "12" + 8;

echo "<br/>";

// ini echo integer untuk operasi hitung
echo 12 + 8 . " Ini Integer\n";

echo "<br/>";

// Cara ke 2 
print "Mochammad " . " Tohari (Mengggunakan print)\n";

// print_r fungsi built in dari php
// cara ke 3 bisa digunakan utk menampilkan data string, array, dsb
print_r("Mochammad Tohari " . " (Mengggunakan print_r)\n");

// var_dump fungsi built in dari php
// cara ke 4 khusus utk analisa data/developer
var_dump("Mochammad Tohari (Menggunakan Var_Dump)");

//Aritmatika

echo 10 + 5 . "\n";
echo 10 - 5 . "\n";
echo 10 * 5 . "\n";
echo 10 / 5 . "\n";
echo 10 % 5 . "\n"; //modulus mencari sisa hasil bagi jika ada 1 jika tidak ada 0

// End Aritmatika

// End Cara Menampilkan Tulisan

echo "<br/>";

// boolean true / false

echo "boolean\n";
var_dump(1 == "1"); //true karena hanya membandingkan value
var_dump(1 === "1"); // false karena membandingkan dengan tipe datanya juga

// End boolean true / false

/*
    operator logika 
    && (and), 
    || (or), 
    ! (not)
    > (lebih dari)
    < (Kurang dari)
    >= (lebih dari samadengan)
    <= (Kurang dari samadengan)
    != (Tidak sama dengan)
    == (sama dengan)
*/

echo "Logika\n";

// untuk integer
echo "Integer\n";
$umur = 18;
var_dump($umur > 20);
var_dump($umur < 20 && $umur >= 16);

//untuk string atau text
echo "String text\n";
$nama = "Tohari";
var_dump($nama == "tohari");
var_dump($nama == "Tohari");


// Variable 

$string1 = "Mochammad Tohari";
$string2 = " (Menggunakan variable terpisah)\n";

echo $string1 . $string2;

echo "<br/>";

$x = 5;
$y = 10;
$hasil = $x * $y;

echo "Hasil perkalian variable x * y = " . $hasil . "\n";

// Assignment
$a = 5;
// $a = 10;
$a += 10;
//$a -= 10;
//$a *= 10;

echo $a . "\n";

//biasanya utk menggabungkan tag html pada logic pada halaman web html
$b = "<div>";
$b .= "<h2>Tohari</h2>";
$b .= "<p>Tohari</p>";
$b .= "</div>";

echo $b;


// End Variable 

?>