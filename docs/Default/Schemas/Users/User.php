<?php

namespace Docs\Default\Schemas\Users;

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
