<?php

namespace alex290\embed\Providers\OEmbed;

class Amcharts extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'live.amcharts.com/*';
    protected static $endPoint = 'https://live.amcharts.com/oembed';
}
