<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/processor.proto

namespace Google\Cloud\DocumentAI\V1\ProcessorVersion\GenAiModelInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information for a pretrained Google-managed foundation model.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ProcessorVersion.GenAiModelInfo.FoundationGenAiModelInfo</code>
 */
class FoundationGenAiModelInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether finetuning is allowed for this base processor version.
     *
     * Generated from protobuf field <code>bool finetuning_allowed = 1;</code>
     */
    private $finetuning_allowed = false;
    /**
     * The minimum number of labeled documents in the training dataset
     * required for finetuning.
     *
     * Generated from protobuf field <code>int32 min_train_labeled_documents = 2;</code>
     */
    private $min_train_labeled_documents = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $finetuning_allowed
     *           Whether finetuning is allowed for this base processor version.
     *     @type int $min_train_labeled_documents
     *           The minimum number of labeled documents in the training dataset
     *           required for finetuning.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Processor::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether finetuning is allowed for this base processor version.
     *
     * Generated from protobuf field <code>bool finetuning_allowed = 1;</code>
     * @return bool
     */
    public function getFinetuningAllowed()
    {
        return $this->finetuning_allowed;
    }

    /**
     * Whether finetuning is allowed for this base processor version.
     *
     * Generated from protobuf field <code>bool finetuning_allowed = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setFinetuningAllowed($var)
    {
        GPBUtil::checkBool($var);
        $this->finetuning_allowed = $var;

        return $this;
    }

    /**
     * The minimum number of labeled documents in the training dataset
     * required for finetuning.
     *
     * Generated from protobuf field <code>int32 min_train_labeled_documents = 2;</code>
     * @return int
     */
    public function getMinTrainLabeledDocuments()
    {
        return $this->min_train_labeled_documents;
    }

    /**
     * The minimum number of labeled documents in the training dataset
     * required for finetuning.
     *
     * Generated from protobuf field <code>int32 min_train_labeled_documents = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMinTrainLabeledDocuments($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_train_labeled_documents = $var;

        return $this;
    }

}


