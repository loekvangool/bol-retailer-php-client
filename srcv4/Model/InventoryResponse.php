<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class InventoryResponse extends AbstractModel
{
    protected static $modelDefinition = [
        'inventory' => [ 'model' => Inventory::class, 'array' => true ],
    ];

    /**
     * @var Inventory[]
     */
    public $inventory;
}