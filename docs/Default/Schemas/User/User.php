<?php

namespace Docs\Default\Schemas\User;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class User
{
    /**
     * @OA\Property()
     */
    public string $name;

    /**
     * @OA\Property()
     */
    public string $email;
}
