<?php

namespace core\library;

use app\database\models\User;
use core\dbal\EntityNotFound;

class Auth
{
    public function __construct(
        private User $user
    ) {
    }

    public function attempt(array $data)
    {
        /** @var UserEntity $user */
        $user = $this->user->auth($data['email']);

        if ($user instanceof EntityNotFound) {
            return false;
        }

        if (!password_verify($data['password'], $user->password)) {
            return false;
        }

        Session::set('auth', $user);

        return true;
    }

    public function logout()
    {
        Session::remove_session('auth');
    }
}
