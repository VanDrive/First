<?php
require_once '../models/article_model.php';

var_dump($_POST);
if(!empty($_POST['name']))
{
    $classArticle = new Article();
    $id = $classArticle->UpdateArticle($_GET['id'], $_POST['name'], $_POST['description'], $_POST['created_at']);
    header('Location: http://127.0.0.1:8000/views/show_articles.php');
}

$ArticlId = new Article();
$article = $ArticlId->ShowById($_GET['id']);

require_once '../views/edit_article.php';