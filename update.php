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

if(isset($name)) {
        $stmt = $mysqli->prepare("UPDATE article SET name=:name, description=:description, created_at=:created_at WHERE id=:id");
        $stmt->bindValue('id', $id);
        $stmt->bindValue('name', $name);
        $stmt->bindValue('created_at', $created_at);
        $stmt->bindValue('description', $description);
        $stmt->execute();
        header('Location: http://127.0.0.1:8000/select.php');
    }
?>

<form method="post">
    <p>Name</p><input type="text" name="name">
    <p>Description</p><input type="text" name="description">
    <p>Created_at</p><input type="date" name="created_at">
    <button type="submit">Submit</button>
</form>