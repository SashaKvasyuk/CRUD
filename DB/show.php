<?php
require 'functions.php';
$id = $_GET['id'];
$task = getOneTask($id);
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
            <h3>Подивитися авто №: <?= $task['id'];?></h3>
            <h5>
                <?= $task['title'];?>
            </h5>
        </div>
    </div>

</div><!-- /.container -->

</body>
</html>
