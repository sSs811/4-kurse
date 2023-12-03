<!DOCTYPE html>
<html>
<head>
    <title>Форма редактирования записей таблицы notebook_brNN</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }


    $brNN = "06";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['id']) && isset($_POST['field_name'])) {
            $id = $_POST['id'];
            $field_name = $_POST['field_name'];
            $field_value = $_POST['field_value'];

            if ($field_name == 'mail' && !preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $field_value)) {
                echo "Неверный формат почты.";
                exit;

            }

            $sql_update = "UPDATE notebook_br$brNN SET $field_name='$field_value' WHERE id='$id'";
            if ($conn->query($sql_update) === TRUE) {
                echo "Запись успешно обновлена.";
            } else {
                echo "Ошибка при обновлении записи: " . $conn->error;
            }
        }
    }


    $sql_select = "SELECT * FROM notebook_br$brNN";
    $result = $conn->query($sql_select);

    if ($result->num_rows > 0) {

        echo "<form method='post' action=''>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>E-mail</th>
                        <th>Адрес</th>
                        <th>Город</th>
                        <th>Дата рождения</th>
                    </tr>";

        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $name = $row["name"];
            $mail = $row["mail"];
            $address = $row["address"];
            $city = $row["city"];
            $birthday = $row["birthday"];

            echo "<tr>
                    <td><input type='radio' name='id' value='$id'></td>
                    <td>$name</td>
                    <td>$mail</td>
                    <td>$address</td>
                    <td>$city</td>
                    <td>$birthday</td>
                </tr>";
        }

        echo "</table>
                <br>
                <label for='field_name'>Выберите поле для изменения:</label>
                <select name='field_name'>
                    <option value='name'>Имя</option>
                    <option value ='mail'>E-mail</option>
                    <option value='address'>Адрес</option>
                    <option value='city'>Город</option>
                    <option value='birthday'>Дата рождения</option>
                </select>
                <br>
                <label for='field_value'>Введите новое значение:</label>
                <input type='text' name='field_value'>
                <br>
                <input type='submit' value='Заменить'>
                <input type='reset' value='Очистить'>
            </form>";
    } else {
        echo "<p>В таблице нет записей.</p>";
    }

    $conn->close();
    ?>

    <br>
    <a href="z09-3.php">Просмотреть таблицу</a>
</body>
</html>