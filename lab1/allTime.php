<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ1.2</title>
</head>
<body>
<?php
include "connection.php";
$project = $_GET['project'];
$sqlSelectCount = $dbh->prepare("SELECT ROUND(SUM($db.work.time_end - $db.work.time_start)/10000, 2) AS time FROM $db.work inner join $db.projects on $db.work.FID_PROJECTS = $db.projects.ID_projects where $db.projects.name = :project");
$sqlSelectCount->execute(array('project' => $project));
$result = $sqlSelectCount->fetch(PDO::FETCH_BOTH);
echo "<p>Общее время затраченное на проект $project: $result[0] час(ов)<p>";
$sqlSelect = $dbh->prepare("SELECT ROUND(($db.work.time_end - $db.work.time_start)/10000,2) AS time, $db.projects.name, $db.worker.ID_WORKER FROM $db.work inner join $db.projects on $db.work.FID_PROJECTS = $db.projects.ID_projects inner join $db.worker on $db.work.FID_WORKER = $db.worker.ID_WORKER where $db.projects.name = :project;");
$sqlSelect->execute(array('project' => $project));
echo "<p>Таблица с данными о затраченном времени каждого сотрудника на проект: $project </p>";
echo "<table border ='1'>";
echo "<tr><th>Количество часов</th><th>Название проекта</th><th>ID-работника</th></tr>";
while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
    echo "<tr><td>$cell[0]</td><td>$cell[1]</td><td>$cell[2]</td></tr>";
}
?>
</body>
<html>