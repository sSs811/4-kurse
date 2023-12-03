<!DOCTYPE html>
<html>
<head>
    <title>Форма для заполнения таблицы</title>
</head>
<body>
    <h2>Форма для заполнения таблицы</h2>
    <form action="z09-2.php" method="POST">
        <label for="name">Имя:</label>
        <input type="text" name="name" required><br>

        <label for="mail">E-mail:</label>
        <input type="email" name="mail" required><br>

        <label for="address">Адрес:</label>
        <input type="text" name="address"><br>

        <label for="city">Город:</label>
        <input type="text" name="city"><br>

        <label for="birthday">Дата рождения:</label>
        <input type="date" name="birthday"><br>

        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sample";

   
        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Ошибка подключения к базе данных: " . $conn->connect_error);
        }

  
        $brNN = "06"; 

        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $birthday = $_POST['birthday'];

        if (!empty($name) && !empty($mail)) {
  
            $sql_insert = "INSERT INTO notebook_br$brNN (name, mail, address, city, birthday) VALUES ('$name', '$mail', '$address', '$city', '$birthday')";
            if ($conn->query($sql_insert) === TRUE) {
                echo "<p>Данные успешно добавлены в таблицу.</p>";
            } else {
                echo "<p>Ошибка при добавлении данных: " . $conn->error . "</p>";
            }
        } else {
            echo "<p>Поля 'name' и 'mail' обязательны для заполнения.</p>";
        }


        $conn->close();
    }
    ?>
</body>
</html>