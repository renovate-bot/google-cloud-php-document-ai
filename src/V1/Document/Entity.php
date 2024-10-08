<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An entity that could be a phrase in the text or a property that belongs to
 * the document. It is a known entity type, such as a person, an organization,
 * or location.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Entity</code>
 */
class Entity extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Provenance of the entity.
     * Text anchor indexing into the
     * [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $text_anchor = null;
    /**
     * Required. Entity type from a schema e.g. `Address`.
     *
     * Generated from protobuf field <code>string type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = '';
    /**
     * Optional. Text value of the entity e.g. `1600 Amphitheatre Pkwy`.
     *
     * Generated from protobuf field <code>string mention_text = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $mention_text = '';
    /**
     * Optional. Deprecated.  Use `id` field instead.
     *
     * Generated from protobuf field <code>string mention_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $mention_id = '';
    /**
     * Optional. Confidence of detected Schema entity. Range `[0, 1]`.
     *
     * Generated from protobuf field <code>float confidence = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $confidence = 0.0;
    /**
     * Optional. Represents the provenance of this entity wrt. the location on
     * the page where it was found.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.PageAnchor page_anchor = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_anchor = null;
    /**
     * Optional. Canonical id. This will be a unique value in the entity list
     * for this document.
     *
     * Generated from protobuf field <code>string id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $id = '';
    /**
     * Optional. Normalized entity value. Absent if the extracted value could
     * not be converted or the type (e.g. address) is not supported for certain
     * parsers. This field is also only populated for certain supported document
     * types.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Entity.NormalizedValue normalized_value = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $normalized_value = null;
    /**
     * Optional. Entities can be nested to form a hierarchical data structure
     * representing the content in the document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Entity properties = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $properties;
    /**
     * Optional. The history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $provenance = null;
    /**
     * Optional. Whether the entity will be redacted for de-identification
     * purposes.
     *
     * Generated from protobuf field <code>bool redacted = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $redacted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\TextAnchor $text_anchor
     *           Optional. Provenance of the entity.
     *           Text anchor indexing into the
     *           [Document.text][google.cloud.documentai.v1.Document.text].
     *     @type string $type
     *           Required. Entity type from a schema e.g. `Address`.
     *     @type string $mention_text
     *           Optional. Text value of the entity e.g. `1600 Amphitheatre Pkwy`.
     *     @type string $mention_id
     *           Optional. Deprecated.  Use `id` field instead.
     *     @type float $confidence
     *           Optional. Confidence of detected Schema entity. Range `[0, 1]`.
     *     @type \Google\Cloud\DocumentAI\V1\Document\PageAnchor $page_anchor
     *           Optional. Represents the provenance of this entity wrt. the location on
     *           the page where it was found.
     *     @type string $id
     *           Optional. Canonical id. This will be a unique value in the entity list
     *           for this document.
     *     @type \Google\Cloud\DocumentAI\V1\Document\Entity\NormalizedValue $normalized_value
     *           Optional. Normalized entity value. Absent if the extracted value could
     *           not be converted or the type (e.g. address) is not supported for certain
     *           parsers. This field is also only populated for certain supported document
     *           types.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Entity>|\Google\Protobuf\Internal\RepeatedField $properties
     *           Optional. Entities can be nested to form a hierarchical data structure
     *           representing the content in the document.
     *     @type \Google\Cloud\DocumentAI\V1\Document\Provenance $provenance
     *           Optional. The history of this annotation.
     *     @type bool $redacted
     *           Optional. Whether the entity will be redacted for de-identification
     *           purposes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Provenance of the entity.
     * Text anchor indexing into the
     * [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\TextAnchor|null
     */
    public function getTextAnchor()
    {
        return $this->text_anchor;
    }

    public function hasTextAnchor()
    {
        return isset($this->text_anchor);
    }

    public function clearTextAnchor()
    {
        unset($this->text_anchor);
    }

    /**
     * Optional. Provenance of the entity.
     * Text anchor indexing into the
     * [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\TextAnchor $var
     * @return $this
     */
    public function setTextAnchor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\TextAnchor::class);
        $this->text_anchor = $var;

        return $this;
    }

    /**
     * Required. Entity type from a schema e.g. `Address`.
     *
     * Generated from protobuf field <code>string type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Entity type from a schema e.g. `Address`.
     *
     * Generated from protobuf field <code>string type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. Text value of the entity e.g. `1600 Amphitheatre Pkwy`.
     *
     * Generated from protobuf field <code>string mention_text = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMentionText()
    {
        return $this->mention_text;
    }

    /**
     * Optional. Text value of the entity e.g. `1600 Amphitheatre Pkwy`.
     *
     * Generated from protobuf field <code>string mention_text = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMentionText($var)
    {
        GPBUtil::checkString($var, True);
        $this->mention_text = $var;

        return $this;
    }

    /**
     * Optional. Deprecated.  Use `id` field instead.
     *
     * Generated from protobuf field <code>string mention_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMentionId()
    {
        return $this->mention_id;
    }

    /**
     * Optional. Deprecated.  Use `id` field instead.
     *
     * Generated from protobuf field <code>string mention_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMentionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->mention_id = $var;

        return $this;
    }

    /**
     * Optional. Confidence of detected Schema entity. Range `[0, 1]`.
     *
     * Generated from protobuf field <code>float confidence = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Optional. Confidence of detected Schema entity. Range `[0, 1]`.
     *
     * Generated from protobuf field <code>float confidence = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * Optional. Represents the provenance of this entity wrt. the location on
     * the page where it was found.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.PageAnchor page_anchor = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\PageAnchor|null
     */
    public function getPageAnchor()
    {
        return $this->page_anchor;
    }

    public function hasPageAnchor()
    {
        return isset($this->page_anchor);
    }

    public function clearPageAnchor()
    {
        unset($this->page_anchor);
    }

    /**
     * Optional. Represents the provenance of this entity wrt. the location on
     * the page where it was found.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.PageAnchor page_anchor = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\PageAnchor $var
     * @return $this
     */
    public function setPageAnchor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\PageAnchor::class);
        $this->page_anchor = $var;

        return $this;
    }

    /**
     * Optional. Canonical id. This will be a unique value in the entity list
     * for this document.
     *
     * Generated from protobuf field <code>string id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Optional. Canonical id. This will be a unique value in the entity list
     * for this document.
     *
     * Generated from protobuf field <code>string id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Optional. Normalized entity value. Absent if the extracted value could
     * not be converted or the type (e.g. address) is not supported for certain
     * parsers. This field is also only populated for certain supported document
     * types.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Entity.NormalizedValue normalized_value = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Entity\NormalizedValue|null
     */
    public function getNormalizedValue()
    {
        return $this->normalized_value;
    }

    public function hasNormalizedValue()
    {
        return isset($this->normalized_value);
    }

    public function clearNormalizedValue()
    {
        unset($this->normalized_value);
    }

    /**
     * Optional. Normalized entity value. Absent if the extracted value could
     * not be converted or the type (e.g. address) is not supported for certain
     * parsers. This field is also only populated for certain supported document
     * types.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Entity.NormalizedValue normalized_value = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Entity\NormalizedValue $var
     * @return $this
     */
    public function setNormalizedValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Entity\NormalizedValue::class);
        $this->normalized_value = $var;

        return $this;
    }

    /**
     * Optional. Entities can be nested to form a hierarchical data structure
     * representing the content in the document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Entity properties = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Optional. Entities can be nested to form a hierarchical data structure
     * representing the content in the document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Entity properties = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Entity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Entity::class);
        $this->properties = $arr;

        return $this;
    }

    /**
     * Optional. The history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Provenance|null
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    public function hasProvenance()
    {
        return isset($this->provenance);
    }

    public function clearProvenance()
    {
        unset($this->provenance);
    }

    /**
     * Optional. The history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Provenance $var
     * @return $this
     */
    public function setProvenance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Provenance::class);
        $this->provenance = $var;

        return $this;
    }

    /**
     * Optional. Whether the entity will be redacted for de-identification
     * purposes.
     *
     * Generated from protobuf field <code>bool redacted = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getRedacted()
    {
        return $this->redacted;
    }

    /**
     * Optional. Whether the entity will be redacted for de-identification
     * purposes.
     *
     * Generated from protobuf field <code>bool redacted = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setRedacted($var)
    {
        GPBUtil::checkBool($var);
        $this->redacted = $var;

        return $this;
    }

}


