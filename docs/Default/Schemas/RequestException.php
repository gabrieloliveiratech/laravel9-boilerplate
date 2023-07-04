<?php

namespace Docs\Default\Schemas;

/**
 * @OA\Schema()
 */
class RequestException
{
    /**
     * @OA\Property()
     */
    public string $message;

    /**
     * @OA\Property(example={})
     */
    public object $errors;

    /**
     * @OA\Property()
     */
    public string $code;
}
