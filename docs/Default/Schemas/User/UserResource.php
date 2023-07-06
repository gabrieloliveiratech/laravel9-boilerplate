<?php

namespace Docs\Default\Schemas\User;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class UserResource
{
    /**
     * @OA\Property()
     */
    public User $data;

    /**
     * @OA\Property(example="integer")
     */
    public int $statusCode;
}
