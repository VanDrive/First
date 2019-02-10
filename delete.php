<?php
$id = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$created_at = $_POST['created_at'];

$db_host = 'localhost';
$db_name = 'postgres';
$db_user = 'postgres';
$db_password = 'root';
$db_table = 'article';

$conn_string = "pgsql:host=$db_host;port=5432;dbname=$db_name;user=$db_user;password=$db_password";
$mysqli = new PDO($conn_string);

        $stmt = $mysqli->prepare("DELETE FROM $db_table WHERE id=:id");
        $stmt->bindValue('id', $id);
        $stmt->execute();
        header('Location: http://127.0.0.1:8000/select.php');