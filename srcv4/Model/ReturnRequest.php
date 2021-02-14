<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ReturnRequest extends AbstractModel
{
    protected static $modelDefinition = [
        'handlingResult' => [ 'model' => null, 'array' => false ],
        'quantityReturned' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var string
     */
    public $handlingResult;

    /**
     * @var int
     */
    public $quantityReturned;
}