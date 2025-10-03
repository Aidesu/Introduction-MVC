

<?php

class View {
    private $model;

    public function __construct($model){ 
        $this->model = $model;
    }

    public function output() {
        return "<h1>" . $this->model->message . "</h1>";
    }

    public function createArticle() {
        return "<form method='post'>
            <h3>Create new article</h3>
            <label for='content'>Article : </label>    
            <input type='text' name='content' placeholder='Enter your article here'>
            <button type='submit'>Submit</button>
            </form>";
    }
}