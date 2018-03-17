<?php error_reporting(0);
$pdo = new PDO('mysql:dbname=id3088575_meridiaphp;host=localhost', 'root', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);