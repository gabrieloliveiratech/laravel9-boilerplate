<?php

namespace Docs\Default\Schemas;

/**
 * @OA\Schema()
 */
class Meta
{
    /**
     * @OA\Property
     */
    public string $current_page;

    /**
     * @OA\Property(example="integer")
     */
    public int $from;

    /**
     * @OA\Property(example="integer")
     */
    public int $last_page;

    /**
     * @OA\Property(
     *  type="array",
     *  @OA\Items(
     *      type="object",
     *      ref="#/components/schemas/MetaLinks"
     *  )
     * )
     */
    public array $links;

    /**
     * @OA\Property
     */
    public string $path;

    /**
     * @OA\Property(example="integer")
     */
    public int $per_page;

    /**
     * @OA\Property(example="integer")
     */
    public int $to;

    /**
     * @OA\Property(example="integer")
     */
    public int $total;
}
