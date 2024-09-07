<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation for transformation matrix, intended to be compatible and
 * used with OpenCV format for image manipulation.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.Matrix</code>
 */
class Matrix extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of rows in the matrix.
     *
     * Generated from protobuf field <code>int32 rows = 1;</code>
     */
    protected $rows = 0;
    /**
     * Number of columns in the matrix.
     *
     * Generated from protobuf field <code>int32 cols = 2;</code>
     */
    protected $cols = 0;
    /**
     * This encodes information about what data type the matrix uses.
     * For example, 0 (CV_8U) is an unsigned 8-bit image. For the full list
     * of OpenCV primitive data types, please refer to
     * https://docs.opencv.org/4.3.0/d1/d1b/group__core__hal__interface.html
     *
     * Generated from protobuf field <code>int32 type = 3;</code>
     */
    protected $type = 0;
    /**
     * The matrix data.
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $rows
     *           Number of rows in the matrix.
     *     @type int $cols
     *           Number of columns in the matrix.
     *     @type int $type
     *           This encodes information about what data type the matrix uses.
     *           For example, 0 (CV_8U) is an unsigned 8-bit image. For the full list
     *           of OpenCV primitive data types, please refer to
     *           https://docs.opencv.org/4.3.0/d1/d1b/group__core__hal__interface.html
     *     @type string $data
     *           The matrix data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of rows in the matrix.
     *
     * Generated from protobuf field <code>int32 rows = 1;</code>
     * @return int
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Number of rows in the matrix.
     *
     * Generated from protobuf field <code>int32 rows = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRows($var)
    {
        GPBUtil::checkInt32($var);
        $this->rows = $var;

        return $this;
    }

    /**
     * Number of columns in the matrix.
     *
     * Generated from protobuf field <code>int32 cols = 2;</code>
     * @return int
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * Number of columns in the matrix.
     *
     * Generated from protobuf field <code>int32 cols = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCols($var)
    {
        GPBUtil::checkInt32($var);
        $this->cols = $var;

        return $this;
    }

    /**
     * This encodes information about what data type the matrix uses.
     * For example, 0 (CV_8U) is an unsigned 8-bit image. For the full list
     * of OpenCV primitive data types, please refer to
     * https://docs.opencv.org/4.3.0/d1/d1b/group__core__hal__interface.html
     *
     * Generated from protobuf field <code>int32 type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * This encodes information about what data type the matrix uses.
     * For example, 0 (CV_8U) is an unsigned 8-bit image. For the full list
     * of OpenCV primitive data types, please refer to
     * https://docs.opencv.org/4.3.0/d1/d1b/group__core__hal__interface.html
     *
     * Generated from protobuf field <code>int32 type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkInt32($var);
        $this->type = $var;

        return $this;
    }

    /**
     * The matrix data.
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The matrix data.
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}


