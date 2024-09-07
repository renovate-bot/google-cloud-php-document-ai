<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for Process API
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ProcessOptions</code>
 */
class ProcessOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Only applicable to `OCR_PROCESSOR` and `FORM_PARSER_PROCESSOR`.
     * Returns error if set on other processor types.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.OcrConfig ocr_config = 1;</code>
     */
    protected $ocr_config = null;
    /**
     * Optional. Only applicable to `LAYOUT_PARSER_PROCESSOR`.
     * Returns error if set on other processor types.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessOptions.LayoutConfig layout_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $layout_config = null;
    /**
     * Optional. Override the schema of the
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion]. Will
     * return an Invalid Argument error if this field is set when the underlying
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] doesn't
     * support schema override.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema schema_override = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $schema_override = null;
    protected $page_range;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\ProcessOptions\IndividualPageSelector $individual_page_selector
     *           Which pages to process (1-indexed).
     *     @type int $from_start
     *           Only process certain pages from the start. Process all if the document
     *           has fewer pages.
     *     @type int $from_end
     *           Only process certain pages from the end, same as above.
     *     @type \Google\Cloud\DocumentAI\V1\OcrConfig $ocr_config
     *           Only applicable to `OCR_PROCESSOR` and `FORM_PARSER_PROCESSOR`.
     *           Returns error if set on other processor types.
     *     @type \Google\Cloud\DocumentAI\V1\ProcessOptions\LayoutConfig $layout_config
     *           Optional. Only applicable to `LAYOUT_PARSER_PROCESSOR`.
     *           Returns error if set on other processor types.
     *     @type \Google\Cloud\DocumentAI\V1\DocumentSchema $schema_override
     *           Optional. Override the schema of the
     *           [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion]. Will
     *           return an Invalid Argument error if this field is set when the underlying
     *           [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] doesn't
     *           support schema override.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Which pages to process (1-indexed).
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessOptions.IndividualPageSelector individual_page_selector = 5;</code>
     * @return \Google\Cloud\DocumentAI\V1\ProcessOptions\IndividualPageSelector|null
     */
    public function getIndividualPageSelector()
    {
        return $this->readOneof(5);
    }

    public function hasIndividualPageSelector()
    {
        return $this->hasOneof(5);
    }

    /**
     * Which pages to process (1-indexed).
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessOptions.IndividualPageSelector individual_page_selector = 5;</code>
     * @param \Google\Cloud\DocumentAI\V1\ProcessOptions\IndividualPageSelector $var
     * @return $this
     */
    public function setIndividualPageSelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\ProcessOptions\IndividualPageSelector::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Only process certain pages from the start. Process all if the document
     * has fewer pages.
     *
     * Generated from protobuf field <code>int32 from_start = 6;</code>
     * @return int
     */
    public function getFromStart()
    {
        return $this->readOneof(6);
    }

    public function hasFromStart()
    {
        return $this->hasOneof(6);
    }

    /**
     * Only process certain pages from the start. Process all if the document
     * has fewer pages.
     *
     * Generated from protobuf field <code>int32 from_start = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setFromStart($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Only process certain pages from the end, same as above.
     *
     * Generated from protobuf field <code>int32 from_end = 7;</code>
     * @return int
     */
    public function getFromEnd()
    {
        return $this->readOneof(7);
    }

    public function hasFromEnd()
    {
        return $this->hasOneof(7);
    }

    /**
     * Only process certain pages from the end, same as above.
     *
     * Generated from protobuf field <code>int32 from_end = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFromEnd($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Only applicable to `OCR_PROCESSOR` and `FORM_PARSER_PROCESSOR`.
     * Returns error if set on other processor types.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.OcrConfig ocr_config = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\OcrConfig|null
     */
    public function getOcrConfig()
    {
        return $this->ocr_config;
    }

    public function hasOcrConfig()
    {
        return isset($this->ocr_config);
    }

    public function clearOcrConfig()
    {
        unset($this->ocr_config);
    }

    /**
     * Only applicable to `OCR_PROCESSOR` and `FORM_PARSER_PROCESSOR`.
     * Returns error if set on other processor types.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.OcrConfig ocr_config = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\OcrConfig $var
     * @return $this
     */
    public function setOcrConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\OcrConfig::class);
        $this->ocr_config = $var;

        return $this;
    }

    /**
     * Optional. Only applicable to `LAYOUT_PARSER_PROCESSOR`.
     * Returns error if set on other processor types.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessOptions.LayoutConfig layout_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DocumentAI\V1\ProcessOptions\LayoutConfig|null
     */
    public function getLayoutConfig()
    {
        return $this->layout_config;
    }

    public function hasLayoutConfig()
    {
        return isset($this->layout_config);
    }

    public function clearLayoutConfig()
    {
        unset($this->layout_config);
    }

    /**
     * Optional. Only applicable to `LAYOUT_PARSER_PROCESSOR`.
     * Returns error if set on other processor types.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessOptions.LayoutConfig layout_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DocumentAI\V1\ProcessOptions\LayoutConfig $var
     * @return $this
     */
    public function setLayoutConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\ProcessOptions\LayoutConfig::class);
        $this->layout_config = $var;

        return $this;
    }

    /**
     * Optional. Override the schema of the
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion]. Will
     * return an Invalid Argument error if this field is set when the underlying
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] doesn't
     * support schema override.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema schema_override = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DocumentAI\V1\DocumentSchema|null
     */
    public function getSchemaOverride()
    {
        return $this->schema_override;
    }

    public function hasSchemaOverride()
    {
        return isset($this->schema_override);
    }

    public function clearSchemaOverride()
    {
        unset($this->schema_override);
    }

    /**
     * Optional. Override the schema of the
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion]. Will
     * return an Invalid Argument error if this field is set when the underlying
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] doesn't
     * support schema override.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema schema_override = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DocumentAI\V1\DocumentSchema $var
     * @return $this
     */
    public function setSchemaOverride($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\DocumentSchema::class);
        $this->schema_override = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPageRange()
    {
        return $this->whichOneof("page_range");
    }

}

