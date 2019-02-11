<?php
include_once '../models/article_model.php';
$NewClass = new Article();
$DellById = $NewClass->DeleteArticle($_GET['id']);
include_once '../views/show.articles.php';