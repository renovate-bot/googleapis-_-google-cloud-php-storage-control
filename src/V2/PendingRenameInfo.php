<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storage/control/v2/storage_control.proto

namespace Google\Cloud\Storage\Control\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information about a pending rename operation.
 *
 * Generated from protobuf message <code>google.storage.control.v2.PendingRenameInfo</code>
 */
class PendingRenameInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the rename operation.
     *
     * Generated from protobuf field <code>string operation = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $operation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $operation
     *           Output only. The name of the rename operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storage\Control\V2\StorageControl::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the rename operation.
     *
     * Generated from protobuf field <code>string operation = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Output only. The name of the rename operation.
     *
     * Generated from protobuf field <code>string operation = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation = $var;

        return $this;
    }

}

