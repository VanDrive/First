<?php

    require_once '../models/article_model.php';

if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['created_at']))
{

    $classArticle = new Article();
    $values = $classArticle->CreateArticle($_POST['name'], $_POST['description'], $_POST['created_at']);
}

require_once '../views/show.articles.php';
