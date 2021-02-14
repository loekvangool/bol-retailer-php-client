<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ProductLabelsRequest extends AbstractModel
{
    protected static $modelDefinition = [
        'format' => [ 'model' => null, 'array' => false ],
        'productLabels' => [ 'model' => ProductLabel::class, 'array' => true ],
    ];

    /**
     * @var string The printer format to create labels for.
     */
    public $format;

    /**
     * @var ProductLabel[]
     */
    public $productLabels;
}