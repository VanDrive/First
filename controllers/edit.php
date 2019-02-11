<?php
include_once '../models/article_model.php';

if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['created_at']))
{
    $classArticle = new Article();
    $id = $classArticle->UpdateArticle($_POST['name'], $_POST['description'], $_POST['created_at']);
    header("location:edit.php?values=".$id);

}

$ArticlId = new Article();
$post = $ArticlId->ShowById($_GET['id']);

include_once '../views/edit.article.php';