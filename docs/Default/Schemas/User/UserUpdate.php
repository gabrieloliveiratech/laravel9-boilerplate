<?php

namespace Docs\Default\Schemas\User;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class UserUpdate
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $name;
}
