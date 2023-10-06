<?php

spl_autoload_register(function (string $className){
    require_once '../'.str_replace('\\', '/', $className).'.php';
});

$url = $_GET['route'] ?? '';
$routes = require '../src/routes.php';
$isRouteFound = false;

foreach($routes as $pattern=>$controllerAndAction){
    preg_match($pattern, $url, $matches);
    if (!empty($matches)){
        // var_dump($matches);
        $isRouteFound = true;
        break;
    }     
}
unset($matches[0]);
if ($isRouteFound){
    $controllerName = $controllerAndAction[0];
    $actionName = $controllerAndAction[1];
    $controller = new $controllerName;
    $controller->$actionName(...$matches);
}
else echo 'Not found';





// $pattern = '/^username$/';
// preg_match($pattern, $url, $matches);
// if (!empty($matches)) 
// {
//     $controller->sayHello($matches[0]);
//     return;
// }

// $pattern = '/^$/';
// preg_match($pattern, $route, $matches);
// if (!empty($matches)) 
// {
//     $controller->main();
//     return;
// }

// 

// $author = new src\Models\User\User('Ivan');
// $article = new src\Models\Article\Article('new title', 'text', $author);
// echo $article->getAuthor()->getName();