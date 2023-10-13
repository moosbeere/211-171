<?php

namespace src\Controllers;
use Services\Db;
use src\View\View;

class ArticleController{
    private $db;
    private $view;

    public function __construct(){
        $this->db = new Db;
        $this->view = new View(__DIR__.'/../../templates/');

    }

    public function index(){
        $sql = 'SELECT * FROM `articles`';
        $articles = $this->db->query($sql);
        $this->view->renderHtml('articles/view.php', ['articles'=>$articles]);
    }
    
}