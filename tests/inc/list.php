<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Перевірка знань</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="col-md-6">
    <div class="card mt-4">
        <div class="card-header">
            <h2 class="text-center">Список тестів</h2>
        </div>
         <div class="card-body">
            <ul class="list">
                <?php
                $res = $db->query("SELECT * FROM tests");
                while ($row = $res->fetch()) {
                    ?>
                    <li><a href="index.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body text-center">
            <a href="admin.php?do=add" class="btn btn-primary">Додати тест</a>
        </div>
    </div>
</div>
</body>