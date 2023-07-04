<?php

namespace Docs\Default\Schemas;

/**
 * @OA\Schema()
 */
class MetaLinks
{
    /**
     * @OA\Property
     */
    public string $url;

    /**
     * @OA\Property
     */
    public string $label;

    /**
     * @OA\Property(example="boolean")
     */
    public bool $active;
}
