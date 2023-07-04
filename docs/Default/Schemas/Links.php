<?php

namespace Docs\Default\Schemas;

/**
 * @OA\Schema()
 */
class Links
{
    /**
     * @OA\Property()
     */
    public string $first;
    /**
     * @OA\Property()
     */
    public string $last;
    /**
     * @OA\Property()
     */
    public string $prev;
    /**
     * @OA\Property()
     */
    public string $next;
}
