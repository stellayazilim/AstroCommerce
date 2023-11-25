<?php

namespace AstroCommerce\Contracts\User\List;

use AstroCommerce\Contracts\Common\Errors\ValidationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ListUsersRequest extends FormRequest{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [  ];
    }

    public function failedValidation(Validator $validator) {

        $traceId = \Ramsey\Uuid\Uuid::uuid4()->toString();

        throw new ValidationException($validator, $this->getPathInfo(), $traceId);
    }
}
