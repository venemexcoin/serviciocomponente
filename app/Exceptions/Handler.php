<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Routing\Exception\assertNotFoundException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'res' => __('Los datos preporcionados no son válidos.'),
            'errors' => $exception->errors(),
        ], $exception->status);
    } 

    public function render($request, Throwable $exception)
    {
        if($exception instanceof ModelNotFoundException){
            return response()->json(["res" => false, "error" => "Error dato no encontrado"], 400);
        }
        if($exception instanceof assertNotFoundException){
            return response()->json(["res" => false, "error" => "No tiene permiso para acceder a esta ruta!!"], 401);
        }
        if($exception instanceof MethodNotAllowedHttpException){
            return response()->json(["res" => false, "error" => "Metodo de adtualizacion no aceptado"], 405);
        }
        return parent::render($request, $exception);
    }
}
