<?php
include_once '../models/article.model.php';
include_once '../views/show.articles.php';

function view_article (){
    global $result_select;
    echo "<table border='1'>";
    foreach ($result_select as $val) {
        echo '<tr>';
        echo '<td>'.$val['id'].'</td>';
        echo '<td>'.$val['name'].'</td>';
        echo '<td>'.$val['description'].'</td>';
        echo '<td>'.$val['created_at'].'</td>';
        echo '<td><a href="update.php?id='.$val['id'].'">update</a></td>';
        echo '<td><a href="delete.php?id='.$val['id'].'">delete</a></td>';
        echo '</tr>';
    }
    echo '</table>';
}

function insert_article (){

    echo 'Статья добвлена';
}
/*
function update_article (){

    echo 'Статья обновлена';
}

function delete_article (){

    echo 'Статья удалена';
}
*\