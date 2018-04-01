<?php
require 'functions.php';

$tasks = getAllTasks();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="/create.php" class="btn btn-success">Добавити новий автомобіль</a>

            <table class="table">
                <thead>
                <tr>
                    <td>№</td>
                    <td>Марка машини</td>
                    <td>Дія</td>
                </tr>
                </thead>

                <tbody>

                <?php foreach($tasks as $task):?>
                <tr>
                    <td><?= $task['id'];?></td>
                    <td><?= $task['title'];?></td>
                    <td>
                        <a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">Подивитись авто</a>
                        <a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">Змінити назву авто</a>
                        <a onclick="return confirm('Вы уверены?')" href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">Видалити</a>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>

</div><!-- /.container -->

</body>
</html>
