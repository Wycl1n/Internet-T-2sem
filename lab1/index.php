<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ1</title>
</head>
<p>Выполненные задачи</p>
<form method="get" action="finishedTasks.php">
    <select name="selectdedProject" id="selectdedProject">
        <?php
        include 'connection.php';
        $sqlSelect = "SELECT DISTINCT * FROM $db.projects";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[1]);
            echo "</option>";
        }
        ?>
    </select>
    <select name="date" id="date">
        <?php
        include 'connection.php';
        $sqlSelect = "SELECT DISTINCT $db.work.date FROM $db.work";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[0]);
            echo "</option>";
        }
        ?>
    </select>
    <input type="submit" value="ok">
</form>

<p>Время работы над проектом</p>
<form method="get" action="allTime.php">
    <select name="project" id="project">
        <?php
        include 'connection.php';
        $sqlSelect = "SELECT DISTINCT * FROM $db.projects";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[1]);
            echo "</option>";
        }
        ?>
    </select>
    <input type="submit" value="ok">
</form>

<p>Количество сотрудников отдела с руководителем</p>
<form method="get" action="countOfWorkers.php">
    <select name="chief" id="chief">
        <?php
        include 'connection.php';
        $sqlSelect = "SELECT DISTINCT * FROM $db.department";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[1]);
            echo "</option>";
        }
        ?>
    </select>
    <input type="submit" value="ok">
</form>

</body>

</html>