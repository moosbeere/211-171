<?php
    namespace src\Controllers;
    use src\View\View;

    class MainController{
        private $view;
        
        public function __construct(){
            $this->view = new View(__DIR__.'/../../templates/');
        }
        
        public function main(){
            $articles = [
                ['title'=>'Заголовок 1','text'=> 'Наша статья'],
                ['title'=>'Заголовок 2', 'text' => 'Our Article']
            ];

            $this->view->renderHtml('main/main.php', ['articles'=>$articles]);
        }

        public function sayHello(string $name){
            echo "Hello, $name";
        }
    }
?>