<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class UpdateOfferRequest extends AbstractModel
{
    protected static $modelDefinition = [
        'reference' => [ 'model' => null, 'array' => false ],
        'onHoldByRetailer' => [ 'model' => null, 'array' => false ],
        'unknownProductTitle' => [ 'model' => null, 'array' => false ],
        'fulfilment' => [ 'model' => Fulfilment::class, 'array' => false ],
    ];

    /**
     * @var string A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters.
     */
    public $reference;

    /**
     * @var bool Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false.
     */
    public $onHoldByRetailer;

    /**
     * @var string In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored.
     */
    public $unknownProductTitle;

    /**
     * @var Fulfilment
     */
    public $fulfilment;
}