<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <meta name = "description" content="Спорт товары">
    <title>SuperSport</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class = "section">
    <div class = "container">
        <form method = "post" class="form" align="center">
            <input class = "input" name = "cities" height="400px" type="text">
            <br />
            <button class = "button">Нажми сюда</button>
            <br />
            <br />
            <?php
            if (!empty($_POST['cities']))
            {
                $arr = explode(",", ucwords(strtolower($_POST['cities'])));
                $arr = array_map('trim', $arr);
                $arr = preg_replace('/\d/', '', $arr);
            }
            else
            {
                echo "Введите города, чтобы тут чего-нибудь увидеть :)";
                $arr = 0;
            }

            if (!empty($arr))
            {
                if ((strlen(implode('', $arr)) != 0)) {
                    $result = array_unique($arr, SORT_STRING);
                    sort($result);
                    for ($i = 0; $i < count($result); $i++) {
                        if (!($result[$i] === ""))
                            echo("{$result[$i]} <br />");
                    }
                    echo "<br>Ну вот, посмотрели, теперь можно и отметку поставить :)";
                }
                else
                {
                    echo "Ну, только если нормальные данные -_-";
                }
            }
            ?>
        </form>

    </div>
</section>


</body>
</html>