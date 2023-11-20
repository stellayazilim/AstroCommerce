<?php
namespace AstroCommerce\Contracts\Common\Errors;


use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class  ValidationException extends HttpResponseException  {

    public function __construct(Validator $validator, string $path, string $traceId) {
        parent::__construct(
            response()->json([
                'type' => "https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/422",
                'title' => 'unprocessable entity',
                'success'   => false,
                'instance' => $path,
                'detail'   => 'Validation errors',
                'data' => $validator->errors(),
                'traceId' => $traceId,
            ])
            ->header('Content-Type', 'application/problem+json')
            ->setStatusCode(422)
        );
    }
      
}