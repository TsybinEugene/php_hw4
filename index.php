<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW4</title>
</head>
<body>
    
    <?php

    echo '1. Дана строка "london is the capital of great britain". Сделайте из нее строку "London Is The Capital Of Great Britain". <br>';

    $str = 'london is the capital of great britain';
    echo ucwords($str) . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . '2. Дана строка "html < b>css< /b> php". Удалите теги из этой строки. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива. <br>';

    $str = 'html <b>css</b> php';
    $str = strip_tags($str);

    echo '<pre>';
    print_r(explode(' ', $str));
    echo '</pre><br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . '3. Дана строка. Перемешайте символы этой строки в случайном порядке. <br>';

    echo 'Первоначальная строка: ' . $str = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.';
    echo '<br>';
    echo 'Перемешанная строка: ' . str_shuffle($str) . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . '4. Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен. <br>';

    echo date('t') . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "5. Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59', timestamp. <br>";

    echo date('Y-m-d') . '<br>';
    echo date('d.m.Y') . '<br>';
    echo date('d.m.H') . '<br>';
    echo date('H:i:s') . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "6. В переменной \$date лежит дата в формате '2025-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня. <br>";
    $date = date("2025-12-31");
    echo 'Заданная дата: ' . $date . '<br>';
    echo 'Заданная дата + 2 дня: ' . date("Y-n-j", strtotime($date . "+ 2 days")) . '<br>';
    echo 'Заданная дата + 1 месяц и 3 дня: ' . date("Y-n-j", strtotime($date . "+ 1 month + 3 days")) . '<br>';
    echo 'Заданная дата + 1 год: ' . date("Y-n-j", strtotime($date . "+ 1 year")) . '<br>';
    echo 'Заданная дата - 3 дня: ' . date("Y-n-j", strtotime($date . "- 3 days")) . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "7. Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'. <br>";

    $str = "1a2b3c4b5d6e7f8g9h0";
    $newStr = preg_replace("/([0-9])/", "", $str);

    echo $newStr . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "8. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число. <br>";

    $arr = [4, -2, 5, 19, -130, 0, 10];

    echo "Исходные числа: ";
    print_r($arr);
    echo '<br>';

    echo "Минимальное число: " . min($arr) . '<br/>';
    echo "Максимальное число: " . max($arr) . '<br/>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "9. Выведите на экран случайное число от 1 до 100. <br>";

    echo 'Случайное число от 1 до 100:   ' . rand(1, 100) . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "10. Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели. <br>";

    $daysWeek = [
        '1' => 'Понедельник',
        '2' => 'Вторник',
        '3' => 'Среда',
        '4' => 'Четверг',
        '5' => 'Пятница',
        '6' => 'Суббота',
        '7' => 'Воскресенье'
    ];

    echo $daysWeek[date("N")] . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "11. Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным. <br>";

    function arrSum($arr) {
        static $sum = 0;
        foreach ($arr as $num) {
           if (is_array($num)) arrSum($num);
           else $sum += $num;
        }
        return $sum;
    }
    echo arrSum([[1, 2, 3], [4, 5], [6]]) . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "12. Есть массив \$array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3, то     есть вывести без дублей при помощи лишь одного цикла и без использования функций PHP. <br>";

    $array = [1, 1, 1, 2, 2, 2, 2, 3];
    $newArr = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $array[$i + 1]) {
            continue;
        } else $newArr[] = $array[$i];
    }
    echo '<pre>';
    print_r($newArr);
    echo '</pre><br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . '13. Используя ассоциативный массив, добавить на страницу навигационное
    меню вида:<br>
    < ul><br>
    < li>< a href="index.php">Home</></><br>
    < li>< a href="about.php">About</></><br>
    
    Курс «Программирование на PHP».<br>
    
    < li>< a href="services.php">Services</></><br>
    < li>< a href="catalog.php">Catalog</></><br>
    < li>< a href="contacts.php">Contacts</></><br>
    < /ul><br>
    Заполните массив соблюдая сл. условия: название индексов являются именем
    файла (без расширения), на который ссылается меню; значения массива явл.
    названиями пунктов меню. <br>';

    $menuArr = [
        'index' => 'Home',
        'about' => 'About',
        'services' => 'Services',
        'catalog' => 'Catalog',
        'contacts' => 'Contacts'
    ];

    echo "<ul>";
    foreach ($menuArr as $path => $name) {
        echo "<li><a href=\"${path}.php\">${name}</a></li>";
    }
    echo "</ul>";

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . '14. Вывести на черном фоне n красных квадратов случайного размера в случайной позиции в браузере. <br>';

    function randSquare($n = 10) {

        for ($i = 0; $i <= $n; $i++) {

            $w = rand(10, 200);
            $h = $w;
            $t = rand(0, 100);
            $l = rand(0, 100);
            $hexArr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f'];
            $c = $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)];

            echo "<div style=\"width:${w}px; height: ${h}px; background-color: #${c}; position: fixed; top: ${t}%; left: ${l}%\"></div>";
        }
    }

    //randSquare();
    echo '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "15. Дана строка с любыми символами. Для примера пусть будет '1234567890'. Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890') и так далее пока символы в строке не закончатся. <br>";

    $str = '1а2б3в4q5r6n78z90w';

    $arr = [];
    $i = 1;

    while (mb_strlen($str) > 0) {
        $arr[] = substr($str, 0, $i);
        $str = substr_replace($str, '', 0, $i);
        ++$i;
    }

    echo '<pre>';
    print_r($arr);
    echo '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . '16. Найдите сумму элементов массива между двумя нулями (первым и последним нулями в массиве). Если двух нулей нет в массиве, то выведите ноль. В массиве может быть более 2х нулей. Пример массива: [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2] или [1,8,0,13,76,8,7,0,22,0,2,3,2]. <br>';

    $arr = [1, 8, 0, 13, 76, 8, 7, 0, 22, 0, 2, 3, 2];
    $arrStr = implode(' ', $arr);
    $first = strpos($arrStr, '0');
    $last = strrpos($arrStr, '0', -1);
    $arrStr = explode(' ', substr($arrStr, $first, $last - $first));
    echo array_sum($arrStr) . '<br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . '17. Сделайте функцию, которая будет генерировать случайный цвет в hex (dechex) формате (типа #ffffff). <br>';

    function genColor() {
        $hexArr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f'];
        $color = $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)] . $hexArr[rand(0, 15)];
        return $color;
    }

    echo '<div style = "width: 200px; height: 50px; background-color: #' . genColor() . ';" ></div><br>';

    //--------------------------------------------------------------------------------------------------

    echo '<br/>' . "18. Дана строка '332 441 550'. Найдите все места, где есть два одинаковых идущих подряд цифры и замените их на '!'. <br>";

    $str = '332 441 550';

    function changeDuble($str) {
        echo "Дано: ${str} <br/>";
        $new_str = '';
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] === $str[$i + 1]) {
                $new_str .= '!';
                $i++;
            } else {
                $new_str .= $str[$i];
            }
        }
        echo "Итог: ${new_str}";
    }

    changeDuble($str);
    echo '<br>';

    //--------------------------------------------------------------------------------------------------


    ?>

</body>
</html>