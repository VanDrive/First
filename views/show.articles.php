<?php

include_once '../controllers/index.php';

echo "<table border='1'>";

foreach ($ShowSelect as $val) {
    echo '<tr>';
    echo '<td>'.$val['id'].'</td>';
    echo '<td>'.$val['name'].'</td>';
    echo '<td>'.$val['description'].'</td>';
    echo '<td>'.$val['created_at'].'</td>';
    echo '<td><a href="../controllers/edit.article.php?id='.$val['id'].'">update</a></td>';
    echo '<td><a href="../controllers/delete.php?id='.$val['id'].'">delete</a></td>';
    echo '</tr>';
}
echo '</table>';
