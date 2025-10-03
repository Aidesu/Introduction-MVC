<?php

class ArticleModel {

    Private $articles = [
        1 => "Article 1 : Introduction a MVC",
        2 => "Article 2 : Pourquoi separer le code ?",
        3 => "Article 3 : Permier mini projet"
    ];

    public function getArticles(){
        return $this->articles;
    }

    public function getArticle($id) {
        return $this->articles[$id] ?? "Article introuvable";
    }

    public function setArticle($article) {
        $this->articles = array_merge($this->articles, $article);
    }
}