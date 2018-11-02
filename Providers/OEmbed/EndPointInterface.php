<?php

namespace alex290\embed\Providers\OEmbed;

use alex290\embed\Adapters\Adapter;
use alex290\embed\Http\Url;

/**
 * Interface for all oembed endPoint.
 */
interface EndPointInterface
{
    /**
     * Check the response and create new instance.
     *
     * @param Adapter $adapter
     *
     * @return EndPointInterface|null
     */
    public static function create(Adapter $adapter);

    /**
     * Returns the oembed endPoint.
     *
     * @return Url|null
     */
    public function getEndPoint();
}
