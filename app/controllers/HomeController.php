<?php

namespace app\controllers;

use app\database\entities\UserEntity;
use app\database\models\User;
use core\library\Response;
use core\library\Twig;
use DateInterval;
use DateTime;

class HomeController extends AbstractController
{
    public function __construct(
        private Twig $twig,
        private User $user
    ) {
    }

    public function index()
    {
        // $entity = UserEntity::create([
        //     'firstName' => 'Alexandre',
        //     'lastName' => 'Cardoso',
        //     'email' => 'xandecar2@hotmail.com',
        //     'password' => password_hash('123', PASSWORD_DEFAULT),
        //     'id' => 5,
        //     'image' => 'my-image.png',
        //     'updated_at' => (new DateTime())->add(new DateInterval('P1D'))->format('Y-m-d H:i:s'),
        // ]);


        // $created = $this->user->create($entity);

        // var_dump($created);
        // $user = $this->user->getUserById(5);
        // var_dump($user);

        die();


        // return new Response(
        //     $this->twig->env->render('home.twig')
        // );
    }
}
