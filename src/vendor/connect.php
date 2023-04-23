<?php
$conn = new mysqli("localhost", "root", "", "jubilant-system");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
// echo "Подключение успешно установлено";
// $conn->close();
?>