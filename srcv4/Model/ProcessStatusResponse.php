<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ProcessStatusResponse extends AbstractModel
{
    protected static $modelDefinition = [
        'processStatuses' => [ 'model' => ProcessStatus::class, 'array' => true ],
    ];

    /**
     * @var ProcessStatus[]
     */
    public $processStatuses;
}