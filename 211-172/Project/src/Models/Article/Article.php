<?php
    namespace src\Models\Article;
    use src\Models\User\User;

    class Article{
        private $title;
        private $text;
        private $author;

        public function __construct(string $title, string $text, User $author){
            $this->title = $title;
            $this->text = $text;
            $this->author = $author;
        }
        
        public function getAuthor(): User
        {
            return $this->author;
        }
    }
?>