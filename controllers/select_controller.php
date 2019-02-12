<?php
include_once '../models/article_model.php';

$select = new Article();
$ShowSelect = $select->ShowArticles();

include_once '../views/show_articles.php ';
