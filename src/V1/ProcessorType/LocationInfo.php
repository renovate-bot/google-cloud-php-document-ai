<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/processor_type.proto

namespace Google\Cloud\DocumentAI\V1\ProcessorType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The location information about where the processor is available.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ProcessorType.LocationInfo</code>
 */
class LocationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The location ID. For supported locations, refer to [regional and
     * multi-regional support](https://cloud.google.com/document-ai/docs/regions).
     *
     * Generated from protobuf field <code>string location_id = 1;</code>
     */
    private $location_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location_id
     *           The location ID. For supported locations, refer to [regional and
     *           multi-regional support](https://cloud.google.com/document-ai/docs/regions).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\ProcessorType::initOnce();
        parent::__construct($data);
    }

    /**
     * The location ID. For supported locations, refer to [regional and
     * multi-regional support](https://cloud.google.com/document-ai/docs/regions).
     *
     * Generated from protobuf field <code>string location_id = 1;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * The location ID. For supported locations, refer to [regional and
     * multi-regional support](https://cloud.google.com/document-ai/docs/regions).
     *
     * Generated from protobuf field <code>string location_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}


