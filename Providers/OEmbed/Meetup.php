<?php

namespace alex290\embed\Providers\OEmbed;

class Meetup extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'www.meetup.com/*';
    protected static $endPoint = 'http://api.meetup.com/oembed';
}
