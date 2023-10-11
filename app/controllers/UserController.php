<?php

namespace app\controllers;

use app\request\UserCreate;
use app\request\UserCreateFormRequest;
use core\library\Response;
use core\library\Twig;

class UserController extends AbstractController
{
    public function __construct(
        private Twig $twig
    ) {
    }

    public function index():Response
    {
        return new Response(
            $this->twig->env->render('users.twig')
        );
    }

    public function create():Response
    {
        return new Response(
            $this->twig->env->render('user_create.twig')
        );
    }

    public function store():Response
    {
        $validated = UserCreateFormRequest::validate($this->request);

        if (!$validated) {
            return redirect('/user/create');
        }
        // UserCreate::validate($this->request);

        // $request = $this->request->getRequest('post');

        // var_dump($request->all());

        // return new Redirect('/');
    }

    public function update(int $id):Response
    {
        return new Response('User ' . $id, 200, [
            'Content-Type' => 'application/json',
        ]);
    }
}
