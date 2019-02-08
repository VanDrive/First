<?php
$conn_string = "pgsql:host=$db_host;port=5432;dbname=$db_name;user=$db_user;password=$db_password";
$mysqli = new PDO($conn_string);
if( isset( $_POST['run'] ) ) {
    try {
        $stmt = $mysqli->prepare("INSERT INTO article (name,description,created_at) VALUES ($name,$text,$created_at)");
        $stmt->bindValue(, text, created_at);
        $stmt->execute();
        $result = $stmt->fetchAll();
    }
    catch (PDOException $e) {
        echo 'Подключение не удалось: ' . $e->getMessage();
    }
    echo 'Кнопка нажата!';
}