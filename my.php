<?php

$sql = "SELECT * FROM article";
$pdo_statement = $getConn->prepare($sql);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();

?>
<form method=”post” action=”index.php”>
<input type=”text” name=”name”>
<input type=”text” name=”description”>
<input type=”text” name=”created_at”>
</form>
