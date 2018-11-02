<?php

namespace alex290\embed\Providers\OEmbed;

use alex290\embed\Http\Url;

class Facebook extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'www.facebook.com/*';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        if ($this->response->getUrl()->match(['*/videos/*', '/video.php'])) {
            $endPoint = Url::create('https://www.facebook.com/plugins/video/oembed.json');
        } else {
            $endPoint = Url::create('https://www.facebook.com/plugins/post/oembed.json');
        }

        return $endPoint->withQueryParameters([
            'url' => (string) $this->response->getUrl(),
            'format' => 'json',
        ]);
    }
}
