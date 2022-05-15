<!DOCTYPE HTML>
<html>
<head>
    <title>ЛБ1.3</title>
</head>
<body>
<?php
include "connection.php";
$chief = $_GET['chief'];
$sqlSelectCount = $dbh->prepare("SELECT COUNT(*) FROM $db.worker inner join $db.department on $db.worker.FID_DEPARTMENT = $db.department.ID_DEPARTMENT WHERE $db.department.chief = :chief");
$sqlSelectCount->execute(array('chief' => $chief));
$result = $sqlSelectCount->fetch(PDO::FETCH_BOTH);
echo "<p>Число сотрудников отдела с руководителем $chief: $result[0], его (их) айди: ";
$sqlSelect = $dbh->prepare("SELECT * FROM $db.worker inner join $db.department on $db.worker.FID_DEPARTMENT = $db.department.ID_DEPARTMENT WHERE $db.department.chief = :chief");
$sqlSelect->execute(array('chief' => $chief));
while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
    echo "$cell[0] ";
}
echo "</p";
?>
</body>
<html>