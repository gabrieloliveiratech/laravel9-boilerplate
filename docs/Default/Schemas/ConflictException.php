<?php

namespace Docs\Default\Schemas;

/**
 * @OA\Schema()
 */
class ConflictException
{
    /**
     * @OA\Property()
     */
    public string $message;

    /**
     * @OA\Property()
     */
    public string $code;
}
