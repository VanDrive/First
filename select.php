<?php
$name = $_POST['name'];
$text = $_POST['description'];
$created_at = $_POST['created_at'];

$db_host = 'localhost';
$db_name = 'postgres';
$db_user = 'postgres';
$db_password = 'root';
$db_table = 'article';

$conn_string = "pgsql:host=$db_host;port=5432;dbname=$db_name;user=$db_user;password=$db_password";
$mysqli = new PDO($conn_string);

    $stmt = $mysqli->prepare("SELECT name, description, created_at FROM article");
    $stmt->execute();
    $result = $stmt->fetchAll();
    echo "<table>";

    foreach ($result as $val) {
        echo '<tr>';
        echo '<td>'.$val['name'].'</td>';
        echo '<td>'.$val['description'].'</td>';
        echo '<td>'.$val['created_at'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
?>

