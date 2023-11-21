<?php
namespace AstroCommerce\Contracts\Common\Errors;


use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class NotFoundException extends HttpResponseException  {

    public function __construct(string $path, string $traceId) {
        parent::__construct(
            response()->json([
                'type' => "https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/404",
                'title' => 'Not found',
                'success'   => false,
                'instance' => $path,
                'detail'   => 'Not found',
                'data' => "Resource not found",
                'traceId' => $traceId,
            ])
            ->header('Content-Type', 'application/problem+json')
            ->setStatusCode(422)
        );
    }
      
}