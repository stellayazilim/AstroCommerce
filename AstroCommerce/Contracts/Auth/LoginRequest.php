<?php

namespace AstroCommerce\Contracts\Auth;

use AstroCommerce\Contracts\Common\Errors\ValidationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

use Illuminate\Support\Facades\Log;
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

        // todo configure logger 
        Log::channel('unprocessable_entities')->info('{id} - {path} - {data}'. $traceId, $this->all());
        throw new ValidationException($validator, $this->getPathInfo(), $traceId);
    }
}