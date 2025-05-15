<?php
require_once "../lib/php/DB.php";

$statement = $dbh->prepare('SELECT * FROM cars ');
//$statement->bindValue(':model', '98');
$statement->execute();// اجرای کوئری
$result = $statement->fetchAll();//دریافت همه رکورد ها
//$result = $statement->fetch();// دریافت یک رکورد

foreach ($result as $value) {
    echo "{$value['id']} {$value['name']} {$value['model']} {$value['price']}" ;
    echo "<br/>";
}