<?php
define('USER', 'a18polpuipui_pol');
define('PASSWORD', 'Movie1234');
define('HOST', 'labs.inspedralbes.cat');
define('DATABASE', 'a18polpuipui_movie');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>