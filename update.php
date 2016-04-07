<?php

$PDO = new PDO(
    'mysql:host=localhost;dbname=mydb',
    'root',
    '');

$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$value = $_REQUEST["value"];
$userid = $_REQUEST["userid"];
$sql = "UPDATE table1 SET value='{$value}' WHERE userid={$userid}";
$PDO->exec($sql);

 ?>
