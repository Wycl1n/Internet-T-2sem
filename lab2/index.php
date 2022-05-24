<!DOCTYPE HTML>
<html>

<head>
    <title>Лабораторна работа 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="script.js"></script>
</head> 

<body>

    <form method="get" action="finishedTask.php">
        <p>Вывеcти данные о выполенных задачах <select name="project" id="project" onchange = finishedTask()>
                <?php
                include 'connection.php';

                $project = $collection->distinct("project");

                foreach ($project as $document) {
                    echo "<option>";
                    print($document);
                    echo "</option>";
                }
                ?>

                </select>
                <select  name="date" id="date" onchange = finishedTask()>
                <?php
                include 'connection.php';
                $timeEnd = $collection->distinct("timeEnd");
                foreach ($timeEnd as $document) {
                    echo "<option>";
                    print gmdate("H:i:s Y-m-d", $document);
                    echo "</option>";
                }
                echo '</select>';
                ?>
                <input type="submit" value="ОК"></p>
    </form>

    <form method="get" action="countProjects.php">
        <p>Количество проектов указанного руководителя <select name="managerProject" id="managerProject" onchange = countProjects()>
                <?php
                include 'connection.php';
                $manager = $collection->distinct("manager");
                foreach ($manager as $document) {
                    echo "<option>";
                    print_r($document);
                    echo "</option>";
                }
                echo '</select>';
                ?>
                <input type="submit" value="Ок"></p>
    </form>

    <form method="get" action="workers.php">
        <p>Вывести информацию о сотрудниках руководителя: <select name="managerWorkers" id="managerWorkers" onchange = workers()>
                <?php
                include 'connection.php';
                $manager = $collection->distinct("manager");
                foreach ($manager as $document) {
                    echo "<option>";
                    print_r($document);
                    echo "</option>";
                }
                echo '</select>';
                ?>
                <input type="submit" value="Ок"></p>
    </form>
    <div id="res"></div>
            </br>
    <button onclick="clearLocalStorage()">Очистить LocalStorage</button>
    
</body>
</html>