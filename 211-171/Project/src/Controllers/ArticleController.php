<?php

namespace src\Controllers;
use src\View\View;
use src\Models\Articles\Article;

class ArticleController{
    private $view;

    public function __construct(){
        $this->view = new View(__DIR__.'/../../templates/');

    }

    public function index(){
        $articles = Article::findAll();
        $this->view->renderHtml('articles/view.php', ['articles'=>$articles]);
    }

    public function show ($id){
        $sql = 'SELECT * FROM `articles` WHERE `id`=:id';
        // $article = $this->db->query($sql, [':id' => $id], Article::class);
        // var_dump($article);
        $this->view->renderHtml('articles/show.php', ['article'=>$article[0]]);
    }
}