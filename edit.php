<form action="update.php" method="post">

<input type="text" name="userid" value=
<?php

echo '"'.$_REQUEST["userid"].'"';

 ?>
 >
<input type="text" name="value" value="
<?php
$PDO = new PDO(
    'mysql:host=localhost;dbname=mydb',
    'root',
    '');
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $PDO->prepare("SELECT value FROM table1 WHERE userid={$_REQUEST["userid"]}");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "{$rows[0]["value"]}\">";


 ?>

<input type="submit" name="select">

</form>
