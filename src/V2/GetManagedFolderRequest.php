<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storage/control/v2/storage_control.proto

namespace Google\Cloud\Storage\Control\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetManagedFolder.
 *
 * Generated from protobuf message <code>google.storage.control.v2.GetManagedFolderRequest</code>
 */
class GetManagedFolderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the managed folder.
     * Format:
     * `projects/{project}/buckets/{bucket}/managedFolders/{managedFolder}`
     *
     * Generated from protobuf field <code>string name = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The operation succeeds conditional on the managed folder's current
     * metageneration matching the value here specified.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_match = 3;</code>
     */
    protected $if_metageneration_match = null;
    /**
     * The operation succeeds conditional on the managed folder's current
     * metageneration NOT matching the value here specified.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_not_match = 4;</code>
     */
    protected $if_metageneration_not_match = null;
    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string $name Required. Name of the managed folder.
     *                     Format:
     *                     `projects/{project}/buckets/{bucket}/managedFolders/{managedFolder}`
     *                     Please see {@see StorageControlClient::managedFolderName()} for help formatting this field.
     *
     * @return \Google\Cloud\Storage\Control\V2\GetManagedFolderRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the managed folder.
     *           Format:
     *           `projects/{project}/buckets/{bucket}/managedFolders/{managedFolder}`
     *     @type int|string $if_metageneration_match
     *           The operation succeeds conditional on the managed folder's current
     *           metageneration matching the value here specified.
     *     @type int|string $if_metageneration_not_match
     *           The operation succeeds conditional on the managed folder's current
     *           metageneration NOT matching the value here specified.
     *     @type string $request_id
     *           Optional. A unique identifier for this request. UUID is the recommended
     *           format, but other formats are still accepted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storage\Control\V2\StorageControl::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the managed folder.
     * Format:
     * `projects/{project}/buckets/{bucket}/managedFolders/{managedFolder}`
     *
     * Generated from protobuf field <code>string name = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the managed folder.
     * Format:
     * `projects/{project}/buckets/{bucket}/managedFolders/{managedFolder}`
     *
     * Generated from protobuf field <code>string name = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * The operation succeeds conditional on the managed folder's current
     * metageneration matching the value here specified.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_match = 3;</code>
     * @return int|string
     */
    public function getIfMetagenerationMatch()
    {
        return isset($this->if_metageneration_match) ? $this->if_metageneration_match : 0;
    }

    public function hasIfMetagenerationMatch()
    {
        return isset($this->if_metageneration_match);
    }

    public function clearIfMetagenerationMatch()
    {
        unset($this->if_metageneration_match);
    }

    /**
     * The operation succeeds conditional on the managed folder's current
     * metageneration matching the value here specified.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_match = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIfMetagenerationMatch($var)
    {
        GPBUtil::checkInt64($var);
        $this->if_metageneration_match = $var;

        return $this;
    }

    /**
     * The operation succeeds conditional on the managed folder's current
     * metageneration NOT matching the value here specified.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_not_match = 4;</code>
     * @return int|string
     */
    public function getIfMetagenerationNotMatch()
    {
        return isset($this->if_metageneration_not_match) ? $this->if_metageneration_not_match : 0;
    }

    public function hasIfMetagenerationNotMatch()
    {
        return isset($this->if_metageneration_not_match);
    }

    public function clearIfMetagenerationNotMatch()
    {
        unset($this->if_metageneration_not_match);
    }

    /**
     * The operation succeeds conditional on the managed folder's current
     * metageneration NOT matching the value here specified.
     *
     * Generated from protobuf field <code>optional int64 if_metageneration_not_match = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIfMetagenerationNotMatch($var)
    {
        GPBUtil::checkInt64($var);
        $this->if_metageneration_not_match = $var;

        return $this;
    }

    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

