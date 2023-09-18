<?php

namespace app\controllers;

use app\request\LoginFormRequest;
use core\library\Auth;
use core\library\Response;
use core\library\Twig;

class LoginController extends AbstractController
{
    public function __construct(
        private Twig $twig,
        private Auth $auth
    ) {
    }

    public function index():Response
    {
        return new Response(
            $this->twig->env->render('login.twig')
        );
    }

    public function store():Response
    {
        $validated = LoginFormRequest::validate($this->request);

        if (!$validated) {
            return redirect('/login');
        }

        $request = $this->request->getRequest('post');

        $auth = $this->auth->attempt($request->all());

        if (!$auth) {
            return redirect('/login')->withMessage('error', 'Email or password incorrect');
        }

        return redirect('/');
    }

    public function destroy():Response
    {
        $this->auth->logout();

        return redirect('/');
    }
}
