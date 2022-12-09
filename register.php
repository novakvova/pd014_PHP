<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Головна стрінка</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include "_header.php" ?>
<div class="container">
    <h1 class="text-center">Реєстрація</h1>
    <form class="col-md-6 offset-md-3" enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for="image" class="form-label">
                Фото
                <img src="https://www.shutterstock.com/image-vector/hand-click-icon-vector-pointer-260nw-1901670688.jpg"
                     alt=""
                    width="300"
                    style="cursor: pointer;">
            </label>
            <input type="file" class="form-control d-none"
                   id="image" name="image">
        </div>
    </form>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
