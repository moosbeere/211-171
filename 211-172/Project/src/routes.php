<?php

    return ([
        '/^username$/' => [\src\Controllers\MainController::class, 'sayHello'],
        '/^$/' =>[\src\Controllers\MainController::class, 'main'],
    ]);