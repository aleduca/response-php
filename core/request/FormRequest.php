<?php

namespace core\request;

use core\library\Request;
use core\library\Session;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator;

abstract class FormRequest
{
    protected Request $request;

    public function is_validated(Validator $validate):bool
    {
        try {
            $validate->assert($this->request->post);

            return true;
        } catch (NestedValidationException $e) {
            Session::flashes($e->getMessages());

            return false;
        }
    }

    protected function setRequest(Request $request)
    {
        $this->request = $request;

        return $this;
    }

    abstract protected function execute();

    public static function validate(Request $request)
    {
        return (new static)->setRequest($request)->execute();
    }
}
