<?php

namespace alex290\embed\Adapters;

use alex290\embed\Http\Response;
use alex290\embed\Utils;
use alex290\embed\Providers\Api;

/**
 * Adapter provider more information from some facebook pages.
 */
class Facebook extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'www.facebook.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        parent::init();

        $this->providers = ['facebook' => new Api\Facebook($this)] + $this->providers;
    }
}
