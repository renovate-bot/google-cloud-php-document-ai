<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_schema.proto

namespace Google\Cloud\DocumentAI\V1\DocumentSchema\EntityType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines properties that can be part of the entity type.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.DocumentSchema.EntityType.Property</code>
 */
class Property extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the property.  Follows the same guidelines as the
     * EntityType name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * User defined name for the property.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     */
    protected $display_name = '';
    /**
     * A reference to the value type of the property.  This type is subject
     * to the same conventions as the `Entity.base_types` field.
     *
     * Generated from protobuf field <code>string value_type = 2;</code>
     */
    protected $value_type = '';
    /**
     * Occurrence type limits the number of instances an entity type appears
     * in the document.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema.EntityType.Property.OccurrenceType occurrence_type = 3;</code>
     */
    protected $occurrence_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the property.  Follows the same guidelines as the
     *           EntityType name.
     *     @type string $display_name
     *           User defined name for the property.
     *     @type string $value_type
     *           A reference to the value type of the property.  This type is subject
     *           to the same conventions as the `Entity.base_types` field.
     *     @type int $occurrence_type
     *           Occurrence type limits the number of instances an entity type appears
     *           in the document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentSchema::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the property.  Follows the same guidelines as the
     * EntityType name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the property.  Follows the same guidelines as the
     * EntityType name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * User defined name for the property.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User defined name for the property.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * A reference to the value type of the property.  This type is subject
     * to the same conventions as the `Entity.base_types` field.
     *
     * Generated from protobuf field <code>string value_type = 2;</code>
     * @return string
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * A reference to the value type of the property.  This type is subject
     * to the same conventions as the `Entity.base_types` field.
     *
     * Generated from protobuf field <code>string value_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkString($var, True);
        $this->value_type = $var;

        return $this;
    }

    /**
     * Occurrence type limits the number of instances an entity type appears
     * in the document.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema.EntityType.Property.OccurrenceType occurrence_type = 3;</code>
     * @return int
     */
    public function getOccurrenceType()
    {
        return $this->occurrence_type;
    }

    /**
     * Occurrence type limits the number of instances an entity type appears
     * in the document.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema.EntityType.Property.OccurrenceType occurrence_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOccurrenceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1\DocumentSchema\EntityType\Property\OccurrenceType::class);
        $this->occurrence_type = $var;

        return $this;
    }

}


