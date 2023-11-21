<?php

namespace src\Controllers;
use src\View\View;
use Services\Db;
use src\Models\User\User;

class UserController {
    private $view;
    private $db;
    
    public function __construct(){
        $this->view = new View(__DIR__.'/../../templates/');
        $this->db = Db::getInstance();
    }

    public function registr(){
        $this->view->renderHtml('users/signUp.php');
    }

    public function login(){
        $this->view->renderHtml('users/login.php');
    }

    public function signUp(){
        if (!empty($_POST)) 
        $user = User::signUp($_POST);
        if ($user instanceof User){
            $this->view->renderHtml('users/signUpSuccessful.php');
        }
        else $this->view->renderHtml('users/signUp.php');
    }

}