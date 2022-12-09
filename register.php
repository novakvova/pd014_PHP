<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Головна стрінка</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cropper.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .preview {
            height: 100px !important;
            width: 100px !important;
            border: 1px solid silver;
            overflow: hidden;
        }
    </style>
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
                     id="selectImage"
                    style="cursor: pointer;">
            </label>
            <input type="file" class="form-control d-none"
                   id="image" name="image">
        </div>
    </form>
</div>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/_modalCropper.php');
?>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/cropper.min.js"></script>
<script>
    const image = document.getElementById("image");
    const imgCropper = document.getElementById("imgCropper");
    const imgPrev = document.getElementById("imgPrev");
    const cropper = new Cropper(imgCropper,{
        aspectRatio: 1/1,
        viewMode: 1,
        preview: imgPrev
    });
    image.onchange = function(e) {
        console.log("select file", e);
        const file = e.target.files[0];
        if(file)
        {
            const url = URL.createObjectURL(file);
            const modal = bootstrap.Modal.getOrCreateInstance(document.getElementById("cropperModal"));
            modal.show();
            cropper.replace(url);
            //image.value="";
        }
    }
</script>
</body>
</html>
