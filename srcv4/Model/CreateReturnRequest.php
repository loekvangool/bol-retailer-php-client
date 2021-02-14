<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class CreateReturnRequest extends AbstractModel
{
    protected static $modelDefinition = [
        'orderItemId' => [ 'model' => null, 'array' => false ],
        'quantityReturned' => [ 'model' => null, 'array' => false ],
        'handlingResult' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var string The id for the order item (1 order can have multiple order items).
     */
    public $orderItemId;

    /**
     * @var int The quantity of items returned.
     */
    public $quantityReturned;

    /**
     * @var string The handling result requested by the retailer.
     */
    public $handlingResult;
}