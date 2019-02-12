<?php

require_once '../models/article_model.php';

if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['created_at']))
{
    $result_create = new Article();
    $values = $result_create->CreateArticle($_POST['name'], $_POST['description'], $_POST['created_at']);
}

header('Location: http://127.0.0.1:8000/views/show_articles.php');
