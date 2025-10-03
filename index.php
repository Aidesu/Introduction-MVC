<?php

require "models/Model.php";
require "models/ArticleModel.php";
require "views/View.php";
require "controllers/Controller.php";

$model = new Model();
$articles = new ArticleModel();
$controller = new Controller($model,$articles);
$view = new View($model);


if (isset($_GET['action']) && $_GET['action'] == "update"){
    $controller->changeMessage();
}

if (isset($_GET['action']) && $_GET['action'] == "kuromi") {
    $controller->kuromiMessage();
}

if (isset($_GET['action']) && $_GET['action'] == "ukuromi") {
    $controller->toUppercaseKuromi();
}

if (isset($_GET['action']) && $_GET['action'] == 'article' && isset($_GET['id'])){
    $controller->show($_GET['id']);
}

if (isset($_GET['action']) && $_GET['action'] == 'newarticle'){
    echo $view->createArticle();
}

if (isset($_POST['content'])){
    $content = htmlspecialchars($_POST['content']);
    $controller->setArticle($content);
}

var_dump($controller->index());

echo $view->output();
echo "<a href='?action='>Renitialiser</a><br><br>";
echo "<a href='?action=update'>Changer le message</a><br><br>";
echo "<a href='?action=kuromi'>Ecouter l'histoire de Kuromi !</a><br><br>";
echo "<a href='?action=ukuromi'>Ecouter l'histoire de Kuromi en majuscule !!!</a><br><br>";
echo "Articles : <br>";

foreach ($controller->index() as $id => $titre) {
    echo "<a href='?action=article&id=$id'>$titre</a><br>";
}
echo "<br>";
echo "<a href='?action=newarticle'>Create new article</a><br><br>";

