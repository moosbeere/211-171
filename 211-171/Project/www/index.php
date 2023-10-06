
<?php
     spl_autoload_register(function ($className){
          require_once('../'.str_replace('\\', '/', $className).'.php');
     });
     
     // require('src/Models/Users/User.php');
     // require('src/Models/Articles/Article.php');

     $user = new src\models\Users\User('Ivan');
     $article = new src\models\Articles\Article('title', 'text', $user);
     echo $article->getAuthor()->getName();    
?>