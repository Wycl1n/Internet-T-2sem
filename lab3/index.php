<!DOCTYPE HTML>
<html>
<head>
    <title>ЛБ3</title>
    <script src="js.js">
    </script>
</head>

<body>
<p>Выполненные задачи</p>
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
    <input type="submit" value="ok" onclick = "text()">


<p>Время работы над проектом</p>
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
    <input type="submit" value="ok" onclick = "xml()">

<p>Количество сотрудников отдела с руководителем</p>
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
    <input type="submit" value="ok" onclick="json()">
    <p></p>
    <div id = "res"></div>

</body>
</html>