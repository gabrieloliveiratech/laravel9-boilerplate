<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ResourceResponseTrait
{
    /**
     * Show some message
     * 
     * @param string $message
     * @param int $statusCode
     * 
     * @return Response
     */
    protected function showMessage($message, $statusCode = 200)
    {
        return response()->json(['message' => $message], $statusCode);
    }

    /**
     * Show one resource
     * 
     * @param mixed $model
     * @param int $statusCode
     * @param mixed $resource
     * 
     * @return Response
     */
    protected function showOne($model, $statusCode = 200, $resource = null)
    {
        $resource = $resource ?? $this->getResource();
        return response()->json(new $resource($model), $statusCode);
    }

    /**
     * Show a collection resource
     * 
     * @param mixed $model
     * @param int $statusCode
     * @param mixed $resource
     * 
     * @return Response
     */
    protected function showAll($collection, $statusCode = 200, $resource = null)
    {
        $resource = $resource ?? $this->getResource(true);
        return response()->json($resource::collection($collection), $statusCode);
    }

    protected function getResource()
    {
        $routeName = request()->route()->getName();
        $pos      = strripos($routeName, '.');
        $resourceName = ucfirst(substr($routeName, 0, $pos - 1));
        $resourceName = 'App\\Http\\Resources\\' . $resourceName . '\\' . $resourceName . 'Resource';

        return $resourceName;
    }
}
