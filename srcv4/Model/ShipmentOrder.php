<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ShipmentOrder extends AbstractModel
{
    protected static $modelDefinition = [
        'orderId' => [ 'model' => null, 'array' => false ],
        'orderPlacedDateTime' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var string A unique identifier for the order this shipment is related to.
     */
    public $orderId;

    /**
     * @var string The date and time in ISO 8601 format when the order was placed.
     */
    public $orderPlacedDateTime;

    public function getOrderPlacedDateTime(): ?\DateTime
    {
        if (empty($this->orderPlacedDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->orderPlacedDateTime);
    }
}