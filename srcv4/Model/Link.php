<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Link extends AbstractModel
{
    protected static $modelDefinition = [
        'rel' => [ 'model' => null, 'array' => false ],
        'href' => [ 'model' => null, 'array' => false ],
        'method' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var string
     */
    public $rel;

    /**
     * @var string
     */
    public $href;

    /**
     * @var string HTTP method
     */
    public $method;
}