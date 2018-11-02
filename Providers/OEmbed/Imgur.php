<?php

namespace alex290\embed\Providers\OEmbed;

class Imgur extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'imgur.com/*',
        'i.imgur.com/*',
    ];
    protected static $endPoint = 'https://api.imgur.com/oembed';
}
