<?php

namespace Docs\Default\Schemas\Users;

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
