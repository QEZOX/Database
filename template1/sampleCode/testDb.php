<?php
require_once "../lib/php/DB.php";
$stmt=$dbh->prepare("select * from cars");
$stmt->execute();
$listCars=$stmt->fetchAll();
?>

<table border="1" >
    <tr>
        <th>Company</th>
        <th>name</th>
        <th>auto</th>
        <th>turbo</th>
        <th>airbag</th>
    </tr>
    <?php foreach($listCars as $car){?>
        <tr>
            <td><?= $car->company?></td>
            <td><?= $car->name?></td>
            <td><?= $car->auto?></td>
            <td><?= $car->turbo?></td>
            <td><?= $car->airbag?></td>
        </tr>
    <?php }?>
</table>
