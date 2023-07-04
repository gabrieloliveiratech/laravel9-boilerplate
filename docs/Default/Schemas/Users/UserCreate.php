<?php

namespace Docs\Default\Schemas\Users;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(required={"name", "email"}))
 */
class UserCreate
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $name;

    /**
     * @OA\Property(maximum="255")
     */
    public string $email;
}
