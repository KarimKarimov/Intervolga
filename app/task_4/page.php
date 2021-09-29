<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/assets/css/docs.min.css">
</head>

<body>
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
    <div class="bd-callout bd-callout-warning">
        <?php
        $n = 100;
        for ($i = 0; $i <= $n; $i++) {
           echo '<code>'. $arr[$i] = rand(1, 9) . ",".'</code>';
        }
        $count = 0;
        for ($i = 0; $i < $n; $i++) {
            if ($arr[$i] == $arr[$i + 1]) {
                $count++;
            }
        }
        print_r('<br />');
        print_r(" Количество последовательных пар одинаковых элементов - " . $count);
        ?>
    </div>
</body>

</html>