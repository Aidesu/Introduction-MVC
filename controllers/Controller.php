<?php

class Controller {
    private $model;
    private $article;

    public function __construct($model, $article){
        $this->model = $model;
        $this->article = $article;
    }

    public function changeMessage() {
        $this->model->message = "Message mis a jour grace au Controller !";
    }

    public function kuromiMessage() {
        $this->model->message = "Un soir de pleine lune, Kuromi trouva un vieux carnet magique abandonné dans la forêt. Curieuse, elle l’ouvrit et découvrit que chaque mot écrit se transformait en une petite étoile brillante. Elle passa la nuit à écrire ses rêves… et au matin, le ciel était rempli de constellations qu’elle avait inventées.";
    }

    public function toUppercaseKuromi() {
        $this->model->message = strtoupper("Un soir de pleine lune, Kuromi trouva un vieux carnet magique abandonné dans la forêt. Curieuse, elle l’ouvrit et découvrit que chaque mot écrit se transformait en une petite étoile brillante. Elle passa la nuit à écrire ses rêves… et au matin, le ciel était rempli de constellations qu’elle avait inventées.");
    }

    public function show($id) {
        $this->model->message = $this->article->getArticle($id);
    }

    public function index() {
        return $this->article->getArticles();
    }

    public function setArticle($article) {
        $articleCounter = max(array_keys($this->article->getArticles())) + 1;
        $this->article->setArticle([$articleCounter -1 => "Article ". $articleCounter . " : " . $article]);
        }

}