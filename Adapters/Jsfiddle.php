<?php

namespace alex290\embed\Adapters;

use alex290\embed\Utils;

/**
 * Adapter to fix some issues from jsfiddle.
 */
class Jsfiddle extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $url = $this->url;
        $embed_url = $url.((substr($url, -1) === '/') ? 'embedded/' : '/embedded/');

        return Utils::iframe($embed_url);
    }
}
