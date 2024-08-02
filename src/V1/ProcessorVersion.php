<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/processor.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A processor version is an implementation of a processor. Each processor
 * can have multiple versions, pretrained by Google internally or uptrained
 * by the customer. A processor can only have one default version at a time.
 * Its document-processing behavior is defined by that version.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ProcessorVersion</code>
 */
class ProcessorVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the processor version.
     * Format:
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processor_version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    private $name = '';
    /**
     * The display name of the processor version.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * The schema of the processor version. Describes the output.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema document_schema = 12;</code>
     */
    private $document_schema = null;
    /**
     * Output only. The state of the processor version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * The time the processor version was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     */
    private $create_time = null;
    /**
     * The most recently invoked evaluation for the processor version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.EvaluationReference latest_evaluation = 8;</code>
     */
    private $latest_evaluation = null;
    /**
     * The KMS key name used for encryption.
     *
     * Generated from protobuf field <code>string kms_key_name = 9;</code>
     */
    private $kms_key_name = '';
    /**
     * The KMS key version with which data is encrypted.
     *
     * Generated from protobuf field <code>string kms_key_version_name = 10;</code>
     */
    private $kms_key_version_name = '';
    /**
     * Output only. Denotes that this `ProcessorVersion` is managed by Google.
     *
     * Generated from protobuf field <code>bool google_managed = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $google_managed = false;
    /**
     * If set, information about the eventual deprecation of this version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.DeprecationInfo deprecation_info = 13;</code>
     */
    private $deprecation_info = null;
    /**
     * Output only. The model type of this processor version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.ModelType model_type = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $model_type = 0;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $satisfies_pzs = false;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $satisfies_pzi = false;
    /**
     * Output only. Information about Generative AI model-based processor
     * versions.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.GenAiModelInfo gen_ai_model_info = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $gen_ai_model_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the processor version.
     *           Format:
     *           `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processor_version}`
     *     @type string $display_name
     *           The display name of the processor version.
     *     @type \Google\Cloud\DocumentAI\V1\DocumentSchema $document_schema
     *           The schema of the processor version. Describes the output.
     *     @type int $state
     *           Output only. The state of the processor version.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time the processor version was created.
     *     @type \Google\Cloud\DocumentAI\V1\EvaluationReference $latest_evaluation
     *           The most recently invoked evaluation for the processor version.
     *     @type string $kms_key_name
     *           The KMS key name used for encryption.
     *     @type string $kms_key_version_name
     *           The KMS key version with which data is encrypted.
     *     @type bool $google_managed
     *           Output only. Denotes that this `ProcessorVersion` is managed by Google.
     *     @type \Google\Cloud\DocumentAI\V1\ProcessorVersion\DeprecationInfo $deprecation_info
     *           If set, information about the eventual deprecation of this version.
     *     @type int $model_type
     *           Output only. The model type of this processor version.
     *     @type bool $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     *     @type \Google\Cloud\DocumentAI\V1\ProcessorVersion\GenAiModelInfo $gen_ai_model_info
     *           Output only. Information about Generative AI model-based processor
     *           versions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Processor::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the processor version.
     * Format:
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processor_version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the processor version.
     * Format:
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processor_version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * The display name of the processor version.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name of the processor version.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
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
     * The schema of the processor version. Describes the output.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema document_schema = 12;</code>
     * @return \Google\Cloud\DocumentAI\V1\DocumentSchema|null
     */
    public function getDocumentSchema()
    {
        return $this->document_schema;
    }

    public function hasDocumentSchema()
    {
        return isset($this->document_schema);
    }

    public function clearDocumentSchema()
    {
        unset($this->document_schema);
    }

    /**
     * The schema of the processor version. Describes the output.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentSchema document_schema = 12;</code>
     * @param \Google\Cloud\DocumentAI\V1\DocumentSchema $var
     * @return $this
     */
    public function setDocumentSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\DocumentSchema::class);
        $this->document_schema = $var;

        return $this;
    }

    /**
     * Output only. The state of the processor version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the processor version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1\ProcessorVersion\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The time the processor version was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The time the processor version was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The most recently invoked evaluation for the processor version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.EvaluationReference latest_evaluation = 8;</code>
     * @return \Google\Cloud\DocumentAI\V1\EvaluationReference|null
     */
    public function getLatestEvaluation()
    {
        return $this->latest_evaluation;
    }

    public function hasLatestEvaluation()
    {
        return isset($this->latest_evaluation);
    }

    public function clearLatestEvaluation()
    {
        unset($this->latest_evaluation);
    }

    /**
     * The most recently invoked evaluation for the processor version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.EvaluationReference latest_evaluation = 8;</code>
     * @param \Google\Cloud\DocumentAI\V1\EvaluationReference $var
     * @return $this
     */
    public function setLatestEvaluation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\EvaluationReference::class);
        $this->latest_evaluation = $var;

        return $this;
    }

    /**
     * The KMS key name used for encryption.
     *
     * Generated from protobuf field <code>string kms_key_name = 9;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * The KMS key name used for encryption.
     *
     * Generated from protobuf field <code>string kms_key_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * The KMS key version with which data is encrypted.
     *
     * Generated from protobuf field <code>string kms_key_version_name = 10;</code>
     * @return string
     */
    public function getKmsKeyVersionName()
    {
        return $this->kms_key_version_name;
    }

    /**
     * The KMS key version with which data is encrypted.
     *
     * Generated from protobuf field <code>string kms_key_version_name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyVersionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_version_name = $var;

        return $this;
    }

    /**
     * Output only. Denotes that this `ProcessorVersion` is managed by Google.
     *
     * Generated from protobuf field <code>bool google_managed = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getGoogleManaged()
    {
        return $this->google_managed;
    }

    /**
     * Output only. Denotes that this `ProcessorVersion` is managed by Google.
     *
     * Generated from protobuf field <code>bool google_managed = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setGoogleManaged($var)
    {
        GPBUtil::checkBool($var);
        $this->google_managed = $var;

        return $this;
    }

    /**
     * If set, information about the eventual deprecation of this version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.DeprecationInfo deprecation_info = 13;</code>
     * @return \Google\Cloud\DocumentAI\V1\ProcessorVersion\DeprecationInfo|null
     */
    public function getDeprecationInfo()
    {
        return $this->deprecation_info;
    }

    public function hasDeprecationInfo()
    {
        return isset($this->deprecation_info);
    }

    public function clearDeprecationInfo()
    {
        unset($this->deprecation_info);
    }

    /**
     * If set, information about the eventual deprecation of this version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.DeprecationInfo deprecation_info = 13;</code>
     * @param \Google\Cloud\DocumentAI\V1\ProcessorVersion\DeprecationInfo $var
     * @return $this
     */
    public function setDeprecationInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\ProcessorVersion\DeprecationInfo::class);
        $this->deprecation_info = $var;

        return $this;
    }

    /**
     * Output only. The model type of this processor version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.ModelType model_type = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getModelType()
    {
        return $this->model_type;
    }

    /**
     * Output only. The model type of this processor version.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.ModelType model_type = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setModelType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1\ProcessorVersion\ModelType::class);
        $this->model_type = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return $this->satisfies_pzs;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return $this->satisfies_pzi;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzi($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzi = $var;

        return $this;
    }

    /**
     * Output only. Information about Generative AI model-based processor
     * versions.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.GenAiModelInfo gen_ai_model_info = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DocumentAI\V1\ProcessorVersion\GenAiModelInfo|null
     */
    public function getGenAiModelInfo()
    {
        return $this->gen_ai_model_info;
    }

    public function hasGenAiModelInfo()
    {
        return isset($this->gen_ai_model_info);
    }

    public function clearGenAiModelInfo()
    {
        unset($this->gen_ai_model_info);
    }

    /**
     * Output only. Information about Generative AI model-based processor
     * versions.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.ProcessorVersion.GenAiModelInfo gen_ai_model_info = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DocumentAI\V1\ProcessorVersion\GenAiModelInfo $var
     * @return $this
     */
    public function setGenAiModelInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\ProcessorVersion\GenAiModelInfo::class);
        $this->gen_ai_model_info = $var;

        return $this;
    }

}

