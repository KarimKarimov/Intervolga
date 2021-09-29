<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <?php
    $a = "Правительство РФ утвердило Яндекс для предустановки на гаджеты";
    $link = "./news.php"; //
    $str = "Премьер-министр России Михаил Мишустин подписал распоряжение, согласно которому поисковик «Яндекса» будет предустанавливаться на продаваемые в стране гаджеты и использоваться по умолчанию с 1 января 2022 года. Документ опубликован на официальном портале правовой информации.";
    //Если ставит ссылка на двух последних слова то это получается что это ссылка не на всех текста новости имеетса а на апределёний слова
    // Например : В 1988 году Сорос пригласил на работу в свой фонд  Стэнли Дракенмиллера ...          пример из википедии
    $b = mb_strimwidth($str, 0, 180);
    ?>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5><?php echo $a ?></h5>
                    <p><?php echo $b ?><a href="<?= $link ?> "> ...</a> </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>