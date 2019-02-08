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
if( isset( $_POST['name'] ) ) {
    $stmt = $mysqli->prepare("INSERT INTO article (name, description, created_at) VALUES (:name, :description, :created_at)");
    $stmt->bindValue('name', $name);
    $stmt->bindValue('created_at', $created_at);
    $stmt->bindValue('description', $text);
    $stmt->execute();

    var_dump($stmt->errorInfo());
}

?>

<form action="insert.php" method="post">
    <p>Name</p><input type="text" name="name">
    <p>Description</p><input type="text" name="description">
    <p>Created_at</p><input type="date" name="created_at">
    <button type="submit">Submit</button>
</form>
