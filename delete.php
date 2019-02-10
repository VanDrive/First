<?php
$id = $_POST['id'];
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

$stmt = $mysqli->prepare("SELECT id ,name, description, created_at FROM article");
$stmt->execute();
$result = $stmt->fetchAll();

echo "<table border='1'>";
foreach ($result as $val) {
    echo '<tr>';
    echo '<td>'.$val['id'].'</td>';
    echo '<td>'.$val['name'].'</td>';
    echo '<td>'.$val['description'].'</td>';
    echo '<td>'.$val['created_at'].'</td>';
    echo '</tr>';
}
echo '</table>';

if($id != NULL) {
        $stmt = $mysqli->prepare("DELETE FROM $db_table WHERE id=:id");
        $stmt->bindValue('id', $id);
        $stmt->execute();
    }
else echo 'Enter ID';
?>

<form action="delete.php" method="post">
    <p>ID</p><input type="text" name="id">
    <button type="submit">Submit</button>
</form>