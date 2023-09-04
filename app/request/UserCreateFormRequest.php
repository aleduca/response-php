<?php

namespace app\request;

use core\request\FormRequest;
use Respect\Validation\Rules\AllOf;
use Respect\Validation\Rules\Key;
use Respect\Validation\Validator;

class UserCreateFormRequest extends FormRequest
{
    protected function execute():bool
    {
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

        return $this->is_validated($validate);
    }
}
