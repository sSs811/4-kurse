<?php
///////////////////////////////// Бригада 6/////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//Задача 1                                                                    //
//1. Создайте массив $treug[] «треугольных» чисел, т.е. чисел вида n(n+1)/2   //
//(где n=1,2,… 10) и выведите значения этого массива на экран в строку (через //
//2 пробела).                                                                 //
//2. Создайте массив $kvd[] квадратов натуральных чисел от 1 до 10, выведите  //
//значения этого массива на экран в строку.                                   //    
//3. Объедините эти 2 массива в массив $rez[], выведите результат на экран.   //
//4. Отсортируйте массив $rez[], выведите результат на экран.                 //
//5. Удалите в массиве $rez[] первый элемент, выведите результат на экран.    //
//6. С помощью функции                                                        //
//повторяющиеся элементы, результат занесите в массив $rez1[] и выведите его  //
//на экран.                                                                   //  
//                                                                            //
////////////////////////////////////////////////////////////////////////////////
echo '1.1';
echo '<br>';
$treug = [];
for ($n = 1; $n <= 10; $n++) {
    $treug[] = $n * ($n + 1) / 2;
}

foreach ($treug as $num) {
    echo $num . '&nbsp&nbsp';
}



echo '<br>';
echo '<br>';
echo '1.2';
echo '<br>';
$kvd = [];
for ($i = 1; $i <= 10; $i++) {
    $kvd[] = $i * $i;
}
echo implode(' ', $kvd);



echo '<br>';
echo '<br>';
echo '1.3';
echo '<br>';
$rez = array_merge($treug, $kvd);

foreach ($rez as $num) {
    echo $num . ' ';
}



echo '<br>';
echo '<br>';
echo '1.4';
echo '<br>';

sort($rez);

foreach ($rez as $num) {
    echo $num . ' ';
}


echo '<br>';
echo '<br>';
echo '1.5';
echo '<br>';

array_shift($rez);
foreach ($rez as $num) {
    echo $num . ' ';
}

echo '<br>';
echo '<br>';
echo '1.6';
echo '<br>';

$rez1 = array_unique($rez);
foreach ($rez1 as $num) {
    echo $num . ' ';
}

////////////////////////////////////////////////////////////////////////////////

echo '<br>';
echo '<br>';
echo '2';
echo '<br>';

echo '<table border="1" cellpadding="0">';
for ($i = 1; $i <= 30; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 30; $j++) {
        $number = $i * $j;
        $color = '';
        
        if ($number % 7 == 0) {
            $color = 'white';
        } elseif ($number % 7 == 1) {
            $color = 'aqua';
        } elseif ($number % 7 == 2) {
            $color = 'blue';
        } elseif ($number % 7 == 3) {
            $color = 'yellow';
        } elseif ($number % 7 == 4) {
            $color = 'purple';
        } elseif ($number % 7 == 5) {
            $color = 'red';
        } elseif ($number % 7 == 6) {
            $color = 'lime';
        }
        
        echo '<td width="14" height="15" style="background-color: '.$color.'; font-size: 1;">&nbsp;</td>';
    }
    echo '</tr>';
}
echo '</table>';


////////////////////////////////////////////////////////////////////////////////

echo '<br>';
echo '<br>';
echo '3.1';
echo '<br>';

$cust = array(
    'cnum' => 2001,
    'cname' => 'Hoffman',
    'city' => 'London',
    'snum' => 1001,
    'rating' => 100
);

foreach ($cust as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';
echo '<br>';
echo '3.2';
echo '<br>';

asort($cust);

foreach ($cust as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';
echo '<br>';
echo '3.3';
echo '<br>';

ksort($cust);

foreach ($cust as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

echo '<br>';
echo '<br>';
echo '3.4';
echo '<br>';

sort($cust);

foreach ($cust as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}


echo '<br>';
echo '<br>';
echo '4';
echo '<br>';




?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма для выбора положения текста в таблице</title>
</head>
<body>
    <table border="1">
        <tr>
            <td height="300" width="300" align="<?php echo isset($_POST['align']) ? $_POST['align'] : 'left'; ?>" valign="<?php echo isset($_POST['valign']) ? $_POST['valign'] : 'top'; ?>">
                <?php echo isset($_POST['text']) ? $_POST['text'] : ''; ?>
            </td>
        </tr>
    </table>

    <h3>Выберите положение текста:</h3>
    <form method="POST" action="">
        <p>
            Горизонтальное расположение текста:
            <input type="radio" name="align" value="left" <?php echo (isset($_POST['align']) && $_POST['align'] == 'left') ? 'checked' : ''; ?>>Слева
            <input type="radio" name="align" value="center" <?php echo (isset($_POST['align']) && $_POST['align'] == 'center') ? 'checked' : ''; ?>>По центру
            <input type="radio" name="align" value="right" <?php echo (isset($_POST['align']) && $_POST['align'] == 'right') ? 'checked' : ''; ?>>Справа
        </p>
        <p>
            Вертикальное расположение текста:
            <input type="checkbox" name="valign[]" value="top" <?php echo (isset($_POST['valign']) && in_array('top', $_POST['valign'])) ? 'checked' : ''; ?>>Верх
            <input type="checkbox" name="valign[]" value="middle" <?php echo (isset($_POST['valign']) && in_array('middle', $_POST['valign'])) ? 'checked' : ''; ?>>По середине
            <input type="checkbox" name="valign[]" value="bottom" <?php echo (isset($_POST['valign']) && in_array('bottom', $_POST['valign'])) ? 'checked' : ''; ?>>Низ
        </p>
        <p>
            Введите текст:
            <input type="text" name="text" value="<?php echo isset($_POST['text']) ? $_POST['text'] : ''; ?>">
        </p>
        <input type="submit" name="submit" value="Выполнить">
    </form>
</body>
</html>

<?php
echo '<br>';
echo '<br>';
echo '5';
echo '<br>';


?>