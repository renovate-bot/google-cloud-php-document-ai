<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/evaluation.proto

namespace GPBMetadata\Google\Cloud\Documentai\V1;

class Evaluation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/documentai/v1/evaluation.protogoogle.cloud.documentai.v1google/protobuf/timestamp.proto"�
EvaluationReference
	operation (	=

evaluation (	B)�A&
$documentai.googleapis.com/EvaluationI
aggregate_metrics (2..google.cloud.documentai.v1.Evaluation.MetricsO
aggregate_metrics_exact (2..google.cloud.documentai.v1.Evaluation.Metrics"�

Evaluation
name (	/
create_time (2.google.protobuf.TimestampJ
document_counters (2/.google.cloud.documentai.v1.Evaluation.Counters[
all_entities_metrics (2=.google.cloud.documentai.v1.Evaluation.MultiConfidenceMetricsQ
entity_metrics (29.google.cloud.documentai.v1.Evaluation.EntityMetricsEntry
kms_key_name (	
kms_key_version_name (	�
Counters
input_documents_count (
invalid_documents_count (
failed_documents_count (!
evaluated_documents_count (�
Metrics
	precision (
recall (
f1_score (#
predicted_occurrences_count (&
ground_truth_occurrences_count ( 
predicted_document_count
 (#
ground_truth_document_count (
true_positives_count (
false_positives_count (
false_negatives_count (
total_documents_count	 (s
ConfidenceLevelMetrics
confidence_level (?
metrics (2..google.cloud.documentai.v1.Evaluation.Metrics�
MultiConfidenceMetrics_
confidence_level_metrics (2=.google.cloud.documentai.v1.Evaluation.ConfidenceLevelMetricse
confidence_level_metrics_exact (2=.google.cloud.documentai.v1.Evaluation.ConfidenceLevelMetrics
auprc (#
estimated_calibration_error (
auprc_exact ()
!estimated_calibration_error_exact (_
metrics_type (2I.google.cloud.documentai.v1.Evaluation.MultiConfidenceMetrics.MetricsType":
MetricsType
METRICS_TYPE_UNSPECIFIED 
	AGGREGATEs
EntityMetricsEntry
key (	L
value (2=.google.cloud.documentai.v1.Evaluation.MultiConfidenceMetrics:8:��A�
$documentai.googleapis.com/Evaluation}projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processor_version}/evaluations/{evaluation}B�
com.google.cloud.documentai.v1BDocumentAiEvaluationPZ>cloud.google.com/go/documentai/apiv1/documentaipb;documentaipb�Google.Cloud.DocumentAI.V1�Google\\Cloud\\DocumentAI\\V1�Google::Cloud::DocumentAI::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

