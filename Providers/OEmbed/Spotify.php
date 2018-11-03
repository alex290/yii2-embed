<?php

namespace alex290\embed\Providers\OEmbed;

use alex290\embed\Http\Url;

class Spotify extends EndPoint implements EndPointInterface
{
    protected static $pattern = '*.spotify.com/*';
    protected static $endPoint = 'https://embed.spotify.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $this->response->getUrl()->withQueryParameters([]),
                    'format' => 'json'
                ]);
    }
}