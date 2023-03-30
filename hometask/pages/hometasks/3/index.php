<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнє завдання 3</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <p>Вважаємо, що це домашнє завдання не виконано і можна повернутись на головну сторінку лише коли його виконаєш:
        <a href="/">Не натискай мене</a>
    </p>
    <ol>
        <li>
            Опрацювати лекційні матеріали (тема 3) в класрум.
            <hr>
        </li>
        <li>
            Опрацювати самостійно тему "Регулярні вирази"
            <a href="https://w3schoolsua.github.io/php/php_regex.html#gsc.tab=0">(посилання)</a><br>
            А також:
            <ul>
                <li>Відвідати сайт <a href="https://regex101.com">regex101.com</a></li>
                <li>Спробувати створити патерни для пошуку в тексті смайлів <b>:) ;) :D ;) :(</b></li>
                <li>Спробувати створити патерни для пошуку в тексті великих літер</li>
                <li>Спробувати створити патерни для пошуку в тексті цифр</li>
                <li>Важке завдання на додаткові бали: замінити в наступному тексті
                    усі скорочення (3 літери) <b>ABS></b> &rightarrow; <b>&lt;b&gt;ABS&lt;\b&gt;</b>
                    <blockquote>
                        <em>
                            PHP отримав змішані відгуки через відсутність власної підтримки Unicode на рівні основної мови. У 2005 році був започаткований проєкт, очолюваний Андрієм Змієвським, для залучення рідної підтримки Unicode на PHP, шляхом вбудовування бібліотеки «Міжнародні компоненти для Unicode» (ICU) та вбудованих текстових рядків як UTF-16. Оскільки це призведе до серйозних змін як до внутрішньої частини мови, так і до коду користувача, планувалося випустити його як версію 6.0 мови разом з іншими основними функціями, які розвиваються.
                        </em>
                    </blockquote>
                </li>
            </ul>
            <hr>
        </li>
        <li>
            Опрацювати самостійно тему "Масиви" за посиланням:
            <a href="https://w3schoolsua.github.io/php/php_arrays.html#gsc.tab=0">Функції</a>
            <ul>
                <li>Створити двомірний індексований масив та показати приклади отримання доступу до окремих елементів</li>
                <li>Створити двомірний асоціативний масив та показати приклади отримання доступу до окремих елементів</li>
                <li>Відсортувати індексований масив за зростанням</li>
                <li>Відсортувати асоціативний масив за зменшенням значення</li>
            </ul>
        </li>
    </ol>
    <?php
        echo "<p>Привіт, я твій РНР скрипт! Завдання виконуй всередині тегів &lt;?php ... ?&gt;</p>";
        echo "<p>(:[)])|(;[)])|(:[D])|(;[D])|(:[(])</p>";
        echo "<p>[A-Z]</p>";
        echo "<p>[0-9]</p>";
        $text = "PHP отримав змішані відгуки через відсутність власної підтримки Unicode на рівні основної мови. У 2005 році був започаткований проєкт, очолюваний Андрієм Змієвським, для залучення рідної підтримки Unicode на PHP, шляхом вбудовування бібліотеки «Міжнародні компоненти для Unicode» (ICU) та вбудованих текстових рядків як UTF-16. Оскільки це призведе до серйозних змін як до внутрішньої частини мови, так і до коду користувача, планувалося випустити його як версію 6.0 мови разом з іншими основними функціями, які розвиваються.";
        $pattern = "/[A-Z]{3}/";

        $result = preg_replace($pattern, "ABS", $text);
        echo "<p>$result</p>";

        $array = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );
        echo "<p>".$array[0][1]."</p>";
        echo "<p>".$array[1][2]."</p>";
        echo "<p>".$array[2][1]."</p>";

        $odnogrupniki = array(
            "Noname1" => array(
                "age" => 20,
                "gender" => "male"
            ),
            "Noname2" => array(
                "age" => 22,
                "gender" => "male"
            ),
            "Noname3" => array(
                "age" => 19,
                "gender" => "male"
            )
        );
        echo "<p>".$odnogrupniki["Noname1"]["age"]."</p>";
        echo "<p>".$odnogrupniki["Noname2"]["gender"]."</p>";
        $result1 = "";
        $arr = array(0,1,4,2,3,6,8,1,2);
        for($i = 0; $i < count($arr); $i++){
            $result1 .= $arr[$i]." ";
        }
        echo "<p>not sorted: $result1</p>";
        sort($arr);
        $result1 = "";
        for($i = 0; $i < count($arr); $i++){
            $result1 .= $arr[$i]." ";
        }
        echo "<p>sorted: $result1</p>";

        $result2 = "";
        $arri = array("a" => 10, "b" => 5, "c" => 20);
        foreach ($arri as $key => $value) {
            $result2 .= $value." ";
        }
        echo "<p>not sorted: $result2</p>";
        arsort($arri);
        $result2 = "";
        foreach ($arri as $key => $value) {
            $result2 .= $value." ";
        }
        echo "<p>sorted: $result2</p>";

    ?>
</body>
</html>