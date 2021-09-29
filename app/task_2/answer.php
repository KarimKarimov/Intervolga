<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="text-center">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="../task_1/page.php">Задача №1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../task_2/page.php">Задача №2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../task_3/answer.php">Задача №3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="../task_4/page.php">Задача №4</a>
        </li>
    </ul>

    <?php
    //Шаг: 1 Прочтите файл
    $source = imagecreatefrompng("../task_2/banner.png");
    //Шаг: 2: Загрузите файл изображения
    $dst_img = "../task_2/uploads/answer.png";
    //Шаг: 3: Масштабировать изображение
    $image = imagescale($source, 200, 100);
    //Шаг: 4: Сохраните изображение с измененным размером в желаемый каталог.
    imagepng($image, $dst_img);
    ?>
    <h2>Изображение с измененным размером на <strong>200x100</strong></h2>
        <img src="/app/task_2/uploads/answer.png" alt="">
</body>

</html>


<!-- Ввод ответа -->