<?php

// format penanggalan PHP bisa dilihat di w3school.com

echo "<strong>Penanggalan di PHP </strong>";
echo "<br/>";

echo date("d-m-Y");
echo "<br/>";

echo date("l, d M Y");
echo "<br/>";

echo time();
echo "<br/>";

/**
 * echo date("l", time() + 60 * 60 * 24 * 1); menambah hari kedepan angka 1 utk menambah hari
 * 
 * echo date("l", time() - 60 * 60 * 24 * 1); mengurang hari kedepan angka 1 utk mengurang hari
 * 
 * echo date("d M Y", time() + 60 * 60 * 24 * 1);
 */
echo date("l", time() + 60 * 60 * 24 * 1);

?>