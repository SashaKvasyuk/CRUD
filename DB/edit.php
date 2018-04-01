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
            <h1>Зміна імені</h1>
            <form action="/update.php?id=<?= $task['id'];?>" method="post">
                <div>
                    <input type="text" name="title" class="form-control" placeholder="Введіть назву" value="<?= $task['title'];?>">
                    <br>
                    <button type="submit" class="btn btn-warning">Змінити</button>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>
