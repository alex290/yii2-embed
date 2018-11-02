<?php

namespace alex290\embed\Adapters;

use alex290\embed\Http\Response;

/**
 * Adapter to provide information from youtube.
 * Required when youtube returns a 429 status code.
 */
class Youtube extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid([200, 429]) && $response->getUrl()->match([
            '*.youtube.*',
        ]);
    }
}
