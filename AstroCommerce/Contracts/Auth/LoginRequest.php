<?php

namespace AstroCommerce\Contracts\Auth;

use AstroCommerce\Contracts\Common\Errors\ValidationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class LoginRequest extends FormRequest{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            "email"=> "required|email",
        ];
    }

    public function failedValidation(Validator $validator) {

        $traceId = \Ramsey\Uuid\Uuid::uuid4()->toString();

        throw new ValidationException($validator, $this->getPathInfo(), $traceId);
    }
}