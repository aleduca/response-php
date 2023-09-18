<?php

namespace app\request;

use core\request\FormRequest;
use Respect\Validation\Rules\AllOf;
use Respect\Validation\Rules\Key;
use Respect\Validation\Validator;

class LoginFormRequest extends FormRequest
{
    protected function execute():bool
    {
        $validate = new Validator;
        $validate->addRule(
            new Key('email', new AllOf(
                Validator::email()->setTemplate('Field must have a valid email'),
                Validator::notEmpty()->setTemplate('Field required'),
            ))
        );
        $validate->addRule(
            new Key('password', Validator::notEmpty()->setTemplate('Field required'))
        );

        return $this->is_validated($validate);
    }
}
