<?php

namespace alex290\embed\Providers\OEmbed;

class Dailymotion extends EndPoint implements EndPointInterface
{
    protected static $pattern = '*dailymotion.*';
    protected static $endPoint = 'http://www.dailymotion.com/services/oembed';
}
