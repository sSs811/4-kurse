<!DOCTYPE html>
<html>
<head>
    <title>Результаты тестирования</title>
</head>
<body>
    <h2>Результаты тестирования</h2>
    <?php
        // Правильные ответы
        $otv = array(
            '1' => 1,  // Верный ответ на вопрос 1
            '2' => 3,  // Верный ответ на вопрос 2
            '3' => 4   // Верный ответ на вопрос 3
        );

        $name = $_POST['name'];

        $score = 0;  // Счетчик правильных ответов

        // Проверка ответов и подсчет счета
        foreach ($otv as $question => $correctAnswer) {
            $userAnswer = $_POST['answer'.$question];

            if ($userAnswer && $userAnswer == $correctAnswer) {
                $score++;
            }
        }

        // Вывод результата на экран
        echo "<p>Поздравляем, ".$name."!</p>";
        echo "<p>Вы ответили правильно на ".$score." вопросов из ".count($otv).".</p>";

        // Оценка знаний в зависимости от количества правильных ответов
        switch ($score) {
            case 0:
                echo "<p>Фу.</p>";
                break;
            case count($otv):
                echo "<p>Харош</p>";
                break;
            default:
                echo "<p>Ну такое.</p>";
        }
    ?>
</body>
</html>