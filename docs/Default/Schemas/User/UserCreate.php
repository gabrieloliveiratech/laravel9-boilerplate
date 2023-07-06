<?php

namespace Docs\Default\Schemas\User;

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
