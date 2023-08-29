<?php

namespace app\request;

use core\library\Request;
use core\library\Session;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Rules\AllOf;
use Respect\Validation\Rules\Key;
use Respect\Validation\Validator;

class UserCreate
{
    public static function validate(Request $request)
    {
        try {
            $validate = new Validator;
            $validate->addRule(
                new Key('firstName', Validator::notEmpty()->setTemplate('Field required'))
            );
            $validate->addRule(
                new Key('lastName', Validator::notEmpty()->setTemplate('Field required'))
            );
            $validate->addRule(
                new Key('email', new AllOf(
                    Validator::email()->setTemplate('Field must have a valid email'),
                    Validator::notEmpty()->setTemplate('Field required'),
                ))
            );
            $validate->addRule(
                new Key('password', new AllOf(
                    Validator::notEmpty()->setTemplate('Field required'),
                    Validator::length(5, null)->setTemplate('Field require at least 5 characters')
                ))
            );
            $validate->assert($request->post);
        } catch (NestedValidationException $e) {
            Session::flashes($e->getMessages());

            return redirect('/user/create');
        }
    }
}
