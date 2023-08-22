<?php

namespace app\controllers;

use app\database\model\User;
use app\interfaces\EmailInterface;
use app\interfaces\PaymentInterface;
use core\library\Request;
use core\library\Response;
use Twig\Environment;

class HomeController
{
    public function __construct(
        private Environment $twig,
        private EmailInterface $email,
        private PaymentInterface $payment,
        private Request $request,
    ) {
    }
    public function index():Response
    {
        $user = new User;
        $user = $user->find('id', 5);

        $this->email->send();
        $this->payment->pay();
        var_dump($this->request->server);

        return new Response(
            $this->twig->render('home.php', ['user' => $user])
        );

        // echo $this->twig->render('home.php', ['user' => $user]);
    }
}
