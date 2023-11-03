<?php

namespace src\Controllers;
use src\View\View;
use src\Models\Articles\Article;
use src\Models\Comments\Comment;
use src\Models\Users\User;

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
        $article = Article::getById($id);
        $comments = Comment::where($article->getId(), 'article_id');
        // var_dump($comments);
        $this->view->renderHtml('articles/show.php', ['article'=>$article, 'comments'=>$comments]);
    }

    public function update(int $id){
        $article = Article::getById($id);
        $article -> save();
    }

    public function edit(int $id){
        $users = User::findAll();
        $article = Article::getById($id);
        $this->view->renderHtml('articles/edit.php', ['article'=>$article, 'users'=>$users]);
    }
}