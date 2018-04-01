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
            <h1>Добавлення нового авто</h1>
            <form action="/store.php" method="post">
                <div>
                    <input type="text" name="title" class="form-control" placeholder="введіть назву">
                    <br>
                    <button type="submit" class="btn btn-success">Добавить</button>
                </div>
            </form>
        </div>
    </div>

</div>

</body>
</html>
