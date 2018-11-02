<?php

namespace alex290\embed\Providers\OEmbed;

class Shoudio extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'shoudio.com/*';
    protected static $endPoint = 'http://shoudio.com/api/oembed';
}
