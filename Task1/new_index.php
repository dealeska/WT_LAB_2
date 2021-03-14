<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <meta name = "description" content="Спорт товары">
    <title>SuperSport</title>
    <link rel="stylesheet" href="../Вт_2_1/new_style.css">
</head>
<body>

<header class = "header">
    <div class = "container">
        <div class = "header_inner">
            <div class = "header_logo">Sport</div>
            <?php
            $topic = array('Главная','Распродажа', 'О нас', 'Заказ товара', 'Контакты');
            if (!empty($_GET['index']))
                $index = $_GET['index'];
            else
                $index = 0;
            ?>
            <nav>
                <ul class="nav">
                    <?php
                        foreach($topic as $key => $value):
                    ?>
                    <li>
                        <a <?php
                            if($key == $index)
                            {
                                echo 'class="nav_active"';
                            }
                            else
                            {
                                echo 'class="nav_link"';
                            }
                            ?>
                        href="new_index.php?index=<?=$key?>"><?=$value?></a>
                    </li>
                    <?php
                        endforeach;
                    ?>
                </ul>
            </nav>

        </div>
    </div>
</header>

<div class = "intro">
    <div class = "container">

    </div>
</div>


</body>
</html>