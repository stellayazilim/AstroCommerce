<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/




class Application extends Illuminate\Foundation\Application {

    public function path($path = '')
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'AstroCommerce' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    public function publicPath($path = '') {
        return $this->path.DIRECTORY_SEPARATOR.'Api/Web/public';
    }

    public function resourcePath($path = '') {
        return $this->path.DIRECTORY_SEPARATOR.'Api/Web/resources'.($path ?  DIRECTORY_SEPARATOR. $path :  DIRECTORY_SEPARATOR. "resources" );
    }


}


$app = new Application(
    realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    AstroCommerce\Api\Rest\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    AstroCommerce\Infrastructure\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    AstroCommerce\Api\Rest\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
