<?php
    namespace src\Models\Articles;
    use src\Models\Users\User;

    class Article{
        private $title;
        private $text;
        private $author;

        public function __construct(string $title, string $text, User $author){
            $this->text = $text;
            $this->title = $title;
            $this->author = $author;
        }

        public function getAuthor():User
        {
            return $this->author;
        }
     }