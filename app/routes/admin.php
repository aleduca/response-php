<?php

use app\controllers\AdminController;
use app\controllers\AdminPostsController;
use app\controllers\AdminUsersController;

return function () {
    return [
        ['GET', '', [AdminController::class, 'index']],
        // ['GET', '/users', [AdminUsersController::class, 'index']],
        ['GET', '/users', function () {
            var_dump('get users form admin');
        }],
        ['GET', '/posts', [AdminPostsController::class, 'index']],
    ];
};
