<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use UnexpectedValueException;

/**
 * Enumerates options for how long an exclusion will last if an event
 * matches the `eventExclusionCriteria`.
 *
 * Protobuf type <code>google.analytics.data.v1alpha.EventExclusionDuration</code>
 */
class EventExclusionDuration
{
    /**
     * Unspecified exclusion duration. Do not specify.
     *
     * Generated from protobuf enum <code>EVENT_EXCLUSION_DURATION_UNSPECIFIED = 0;</code>
     */
    const EVENT_EXCLUSION_DURATION_UNSPECIFIED = 0;
    /**
     * Permanently exclude events from the segment if the event ever meets
     * the `eventExclusionCriteria` condition.
     *
     * Generated from protobuf enum <code>EVENT_EXCLUSION_PERMANENT = 1;</code>
     */
    const EVENT_EXCLUSION_PERMANENT = 1;

    private static $valueToName = [
        self::EVENT_EXCLUSION_DURATION_UNSPECIFIED => 'EVENT_EXCLUSION_DURATION_UNSPECIFIED',
        self::EVENT_EXCLUSION_PERMANENT => 'EVENT_EXCLUSION_PERMANENT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
