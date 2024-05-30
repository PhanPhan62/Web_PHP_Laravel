<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace GPBMetadata\Google\Analytics\Data\V1Alpha;

class Data
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�c
(google/analytics/data/v1alpha/data.protogoogle.analytics.data.v1alpha"?
	DateRange

start_date (	
end_date (	
name (	"k
	Dimension
name (	P
dimension_expression (22.google.analytics.data.v1alpha.DimensionExpression"�
DimensionExpressionW

lower_case (2A.google.analytics.data.v1alpha.DimensionExpression.CaseExpressionH W

upper_case (2A.google.analytics.data.v1alpha.DimensionExpression.CaseExpressionH _
concatenate (2H.google.analytics.data.v1alpha.DimensionExpression.ConcatenateExpressionH (
CaseExpression
dimension_name (	C
ConcatenateExpression
dimension_names (	
	delimiter (	B
one_expression"�
FilterExpressionH
	and_group (23.google.analytics.data.v1alpha.FilterExpressionListH G
or_group (23.google.analytics.data.v1alpha.FilterExpressionListH I
not_expression (2/.google.analytics.data.v1alpha.FilterExpressionH 7
filter (2%.google.analytics.data.v1alpha.FilterH B
expr"\\
FilterExpressionListD
expressions (2/.google.analytics.data.v1alpha.FilterExpression"�
Filter

field_name (	D
string_filter (2+.google.analytics.data.v1alpha.StringFilterH E
in_list_filter (2+.google.analytics.data.v1alpha.InListFilterH F
numeric_filter (2,.google.analytics.data.v1alpha.NumericFilterH F
between_filter (2,.google.analytics.data.v1alpha.BetweenFilterH B

one_filter"�
StringFilterI

match_type (25.google.analytics.data.v1alpha.StringFilter.MatchType
value (	
case_sensitive ("�
	MatchType
MATCH_TYPE_UNSPECIFIED 	
EXACT
BEGINS_WITH
	ENDS_WITH
CONTAINS
FULL_REGEXP
PARTIAL_REGEXP"6
InListFilter
values (	
case_sensitive ("�
NumericFilterI
	operation (26.google.analytics.data.v1alpha.NumericFilter.Operation:
value (2+.google.analytics.data.v1alpha.NumericValue"�
	Operation
OPERATION_UNSPECIFIED 	
EQUAL
	LESS_THAN
LESS_THAN_OR_EQUAL
GREATER_THAN
GREATER_THAN_OR_EQUAL"�
BetweenFilter?

from_value (2+.google.analytics.data.v1alpha.NumericValue=
to_value (2+.google.analytics.data.v1alpha.NumericValue"J
NumericValue
int64_value (H 
double_value (H B
	one_value"
DimensionHeader
name (	"U
MetricHeader
name (	7
type (2).google.analytics.data.v1alpha.MetricType"�
RowG
dimension_values (2-.google.analytics.data.v1alpha.DimensionValueA
metric_values (2*.google.analytics.data.v1alpha.MetricValue".
DimensionValue
value (	H B
	one_value"+
MetricValue
value (	H B
	one_value"�
PropertyQuotaB
tokens_per_day (2*.google.analytics.data.v1alpha.QuotaStatusC
tokens_per_hour (2*.google.analytics.data.v1alpha.QuotaStatusG
concurrent_requests (2*.google.analytics.data.v1alpha.QuotaStatusV
"server_errors_per_project_per_hour (2*.google.analytics.data.v1alpha.QuotaStatus]
)potentially_thresholded_requests_per_hour (2*.google.analytics.data.v1alpha.QuotaStatusO
tokens_per_project_per_hour (2*.google.analytics.data.v1alpha.QuotaStatus"2
QuotaStatus
consumed (
	remaining ("v
FunnelBreakdownE
breakdown_dimension (2(.google.analytics.data.v1alpha.Dimension
limit (H �B
_limit"y
FunnelNextActionG
next_action_dimension (2(.google.analytics.data.v1alpha.Dimension
limit (H �B
_limit"Z
Funnel
is_open_funnel (8
steps (2).google.analytics.data.v1alpha.FunnelStep"�

FunnelStep
name (	
is_directly_followed_by (G
within_duration_from_prior_step (2.google.protobuf.DurationH �P
filter_expression (25.google.analytics.data.v1alpha.FunnelFilterExpressionB"
 _within_duration_from_prior_step"�
FunnelSubReportI
dimension_headers (2..google.analytics.data.v1alpha.DimensionHeaderC
metric_headers (2+.google.analytics.data.v1alpha.MetricHeader0
rows (2".google.analytics.data.v1alpha.RowG
metadata (25.google.analytics.data.v1alpha.FunnelResponseMetadata"�
UserSegmentS
user_inclusion_criteria (22.google.analytics.data.v1alpha.UserSegmentCriteriaF
	exclusion (23.google.analytics.data.v1alpha.UserSegmentExclusion"�
UserSegmentCriteriaV
and_condition_groups (28.google.analytics.data.v1alpha.UserSegmentConditionGroupT
and_sequence_groups (27.google.analytics.data.v1alpha.UserSegmentSequenceGroup"�
UserSegmentConditionGroupM
condition_scoping (22.google.analytics.data.v1alpha.UserCriteriaScopingY
segment_filter_expression (26.google.analytics.data.v1alpha.SegmentFilterExpression"�
UserSegmentSequenceGroupL
sequence_scoping (22.google.analytics.data.v1alpha.UserCriteriaScoping<
sequence_maximum_duration (2.google.protobuf.DurationL
user_sequence_steps (2/.google.analytics.data.v1alpha.UserSequenceStep"�
UserSequenceStep
is_directly_followed_by (H
step_scoping (22.google.analytics.data.v1alpha.UserCriteriaScopingY
segment_filter_expression (26.google.analytics.data.v1alpha.SegmentFilterExpression"�
UserSegmentExclusionU
user_exclusion_duration (24.google.analytics.data.v1alpha.UserExclusionDurationS
user_exclusion_criteria (22.google.analytics.data.v1alpha.UserSegmentCriteria"�
SessionSegmentY
session_inclusion_criteria (25.google.analytics.data.v1alpha.SessionSegmentCriteriaI
	exclusion (26.google.analytics.data.v1alpha.SessionSegmentExclusion"s
SessionSegmentCriteriaY
and_condition_groups (2;.google.analytics.data.v1alpha.SessionSegmentConditionGroup"�
SessionSegmentConditionGroupP
condition_scoping (25.google.analytics.data.v1alpha.SessionCriteriaScopingY
segment_filter_expression (26.google.analytics.data.v1alpha.SegmentFilterExpression"�
SessionSegmentExclusion[
session_exclusion_duration (27.google.analytics.data.v1alpha.SessionExclusionDurationY
session_exclusion_criteria (25.google.analytics.data.v1alpha.SessionSegmentCriteria"�
EventSegmentU
event_inclusion_criteria (23.google.analytics.data.v1alpha.EventSegmentCriteriaG
	exclusion (24.google.analytics.data.v1alpha.EventSegmentExclusion"o
EventSegmentCriteriaW
and_condition_groups (29.google.analytics.data.v1alpha.EventSegmentConditionGroup"�
EventSegmentConditionGroupN
condition_scoping (23.google.analytics.data.v1alpha.EventCriteriaScopingY
segment_filter_expression (26.google.analytics.data.v1alpha.SegmentFilterExpression"�
EventSegmentExclusionW
event_exclusion_duration (25.google.analytics.data.v1alpha.EventExclusionDurationU
event_exclusion_criteria (23.google.analytics.data.v1alpha.EventSegmentCriteria"�
Segment
name (	B
user_segment (2*.google.analytics.data.v1alpha.UserSegmentH H
session_segment (2-.google.analytics.data.v1alpha.SessionSegmentH D
event_segment (2+.google.analytics.data.v1alpha.EventSegmentH B
one_segment_scope"�
SegmentFilterExpressionO
	and_group (2:.google.analytics.data.v1alpha.SegmentFilterExpressionListH N
or_group (2:.google.analytics.data.v1alpha.SegmentFilterExpressionListH P
not_expression (26.google.analytics.data.v1alpha.SegmentFilterExpressionH F
segment_filter (2,.google.analytics.data.v1alpha.SegmentFilterH Q
segment_event_filter (21.google.analytics.data.v1alpha.SegmentEventFilterH B
expr"j
SegmentFilterExpressionListK
expressions (26.google.analytics.data.v1alpha.SegmentFilterExpression"�
SegmentFilter

field_name (	D
string_filter (2+.google.analytics.data.v1alpha.StringFilterH E
in_list_filter (2+.google.analytics.data.v1alpha.InListFilterH F
numeric_filter (2,.google.analytics.data.v1alpha.NumericFilterH F
between_filter (2,.google.analytics.data.v1alpha.BetweenFilterH K
filter_scoping (23.google.analytics.data.v1alpha.SegmentFilterScopingB

one_filter"R
SegmentFilterScoping!
at_any_point_in_time (H �B
_at_any_point_in_time"�
SegmentEventFilter

event_name (	H �q
#segment_parameter_filter_expression (2?.google.analytics.data.v1alpha.SegmentParameterFilterExpressionH�B
_event_nameB&
$_segment_parameter_filter_expression"�
 SegmentParameterFilterExpressionX
	and_group (2C.google.analytics.data.v1alpha.SegmentParameterFilterExpressionListH W
or_group (2C.google.analytics.data.v1alpha.SegmentParameterFilterExpressionListH Y
not_expression (2?.google.analytics.data.v1alpha.SegmentParameterFilterExpressionH Y
segment_parameter_filter (25.google.analytics.data.v1alpha.SegmentParameterFilterH B
expr"|
$SegmentParameterFilterExpressionListT
expressions (2?.google.analytics.data.v1alpha.SegmentParameterFilterExpression"�
SegmentParameterFilter
event_parameter_name (	H 
item_parameter_name (	H D
string_filter (2+.google.analytics.data.v1alpha.StringFilterHE
in_list_filter (2+.google.analytics.data.v1alpha.InListFilterHF
numeric_filter (2,.google.analytics.data.v1alpha.NumericFilterHF
between_filter (2,.google.analytics.data.v1alpha.BetweenFilterHT
filter_scoping (2<.google.analytics.data.v1alpha.SegmentParameterFilterScopingB
one_parameterB

one_filter"Y
SegmentParameterFilterScoping 
in_any_n_day_period (H �B
_in_any_n_day_period"�
FunnelFilterExpressionN
	and_group (29.google.analytics.data.v1alpha.FunnelFilterExpressionListH M
or_group (29.google.analytics.data.v1alpha.FunnelFilterExpressionListH O
not_expression (25.google.analytics.data.v1alpha.FunnelFilterExpressionH O
funnel_field_filter (20.google.analytics.data.v1alpha.FunnelFieldFilterH O
funnel_event_filter (20.google.analytics.data.v1alpha.FunnelEventFilterH B
expr"h
FunnelFilterExpressionListJ
expressions (25.google.analytics.data.v1alpha.FunnelFilterExpression"�
FunnelFieldFilter

field_name (	D
string_filter (2+.google.analytics.data.v1alpha.StringFilterH E
in_list_filter (2+.google.analytics.data.v1alpha.InListFilterH F
numeric_filter (2,.google.analytics.data.v1alpha.NumericFilterH F
between_filter (2,.google.analytics.data.v1alpha.BetweenFilterH B

one_filter"�
FunnelEventFilter

event_name (	H �o
"funnel_parameter_filter_expression (2>.google.analytics.data.v1alpha.FunnelParameterFilterExpressionH�B
_event_nameB%
#_funnel_parameter_filter_expression"�
FunnelParameterFilterExpressionW
	and_group (2B.google.analytics.data.v1alpha.FunnelParameterFilterExpressionListH V
or_group (2B.google.analytics.data.v1alpha.FunnelParameterFilterExpressionListH X
not_expression (2>.google.analytics.data.v1alpha.FunnelParameterFilterExpressionH W
funnel_parameter_filter (24.google.analytics.data.v1alpha.FunnelParameterFilterH B
expr"z
#FunnelParameterFilterExpressionListS
expressions (2>.google.analytics.data.v1alpha.FunnelParameterFilterExpression"�
FunnelParameterFilter
event_parameter_name (	H 
item_parameter_name (	H D
string_filter (2+.google.analytics.data.v1alpha.StringFilterHE
in_list_filter (2+.google.analytics.data.v1alpha.InListFilterHF
numeric_filter (2,.google.analytics.data.v1alpha.NumericFilterHF
between_filter (2,.google.analytics.data.v1alpha.BetweenFilterHB
one_parameterB

one_filter"e
FunnelResponseMetadataK
sampling_metadatas (2/.google.analytics.data.v1alpha.SamplingMetadata"K
SamplingMetadata
samples_read_count (
sampling_space_size (*�
UserCriteriaScoping%
!USER_CRITERIA_SCOPING_UNSPECIFIED #
USER_CRITERIA_WITHIN_SAME_EVENT%
!USER_CRITERIA_WITHIN_SAME_SESSION%
!USER_CRITERIA_ACROSS_ALL_SESSIONS*|
UserExclusionDuration\'
#USER_EXCLUSION_DURATION_UNSPECIFIED 
USER_EXCLUSION_TEMPORARY
USER_EXCLUSION_PERMANENT*�
SessionCriteriaScoping(
$SESSION_CRITERIA_SCOPING_UNSPECIFIED &
"SESSION_CRITERIA_WITHIN_SAME_EVENT(
$SESSION_CRITERIA_WITHIN_SAME_SESSION*�
SessionExclusionDuration*
&SESSION_EXCLUSION_DURATION_UNSPECIFIED 
SESSION_EXCLUSION_TEMPORARY
SESSION_EXCLUSION_PERMANENT*d
EventCriteriaScoping&
"EVENT_CRITERIA_SCOPING_UNSPECIFIED $
 EVENT_CRITERIA_WITHIN_SAME_EVENT*a
EventExclusionDuration(
$EVENT_EXCLUSION_DURATION_UNSPECIFIED 
EVENT_EXCLUSION_PERMANENT*�

MetricType
METRIC_TYPE_UNSPECIFIED 
TYPE_INTEGER

TYPE_FLOAT
TYPE_SECONDS
TYPE_MILLISECONDS
TYPE_MINUTES

TYPE_HOURS
TYPE_STANDARD
TYPE_CURRENCY	
	TYPE_FEET


TYPE_MILES
TYPE_METERS
TYPE_KILOMETERSB{
!com.google.analytics.data.v1alphaBReportingApiProtoPZAgoogle.golang.org/genproto/googleapis/analytics/data/v1alpha;databproto3'
        , true);

        static::$is_initialized = true;
    }
}

