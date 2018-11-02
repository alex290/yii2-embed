<?php

namespace alex290\embed\Providers\OEmbed;

use alex290\embed\Adapters\Adapter;
use alex290\embed\Http\Response;
use alex290\embed\Http\Url;

/**
 * Abstract class extended by other classes.
 */
abstract class EndPoint
{
    protected $response;
    protected static $pattern;
    protected static $endPoint;

    /**
     * {@inheritdoc}
     */
    public static function create(Adapter $adapter)
    {
        $response = $adapter->getResponse();

        if ($response->getUrl()->match(static::$pattern)) {
            return new static($response);
        }
    }

    /**
     * Constructor.
     *
     * @param Response $response
     */
    protected function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $this->response->getUrl(),
                    'format' => 'json',
                ]);
    }
}
