<?php

// Memulai sesi
session_start();

//Mengakhiri sesi
session_destroy();

header("location: ./Login_Page.php");
exit();
?>