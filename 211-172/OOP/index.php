<?php

class Article{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author){
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }
    
    public function getAuthor():User
    {
        return $this->author;
    }
}

class User{
    private $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$author = new User('Ivan');
$article = new Article('new title', 'text', $author);

echo $article->getAuthor()->getName();