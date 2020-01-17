<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [UpdateInstance][google.spanner.admin.instance.v1.InstanceAdmin.UpdateInstance].
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.UpdateInstanceRequest</code>
 */
class UpdateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The instance to update, which must always include the instance
     * name.  Otherwise, only fields mentioned in [][google.spanner.admin.instance.v1.UpdateInstanceRequest.field_mask] need be included.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = null;
    /**
     * Required. A mask specifying which fields in [][google.spanner.admin.instance.v1.UpdateInstanceRequest.instance] should be updated.
     * The field mask must always be specified; this prevents any future fields in
     * [][google.spanner.admin.instance.v1.Instance] from being erased accidentally by clients that do not know
     * about them.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $field_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\Admin\Instance\V1\Instance $instance
     *           Required. The instance to update, which must always include the instance
     *           name.  Otherwise, only fields mentioned in [][google.spanner.admin.instance.v1.UpdateInstanceRequest.field_mask] need be included.
     *     @type \Google\Protobuf\FieldMask $field_mask
     *           Required. A mask specifying which fields in [][google.spanner.admin.instance.v1.UpdateInstanceRequest.instance] should be updated.
     *           The field mask must always be specified; this prevents any future fields in
     *           [][google.spanner.admin.instance.v1.Instance] from being erased accidentally by clients that do not know
     *           about them.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The instance to update, which must always include the instance
     * name.  Otherwise, only fields mentioned in [][google.spanner.admin.instance.v1.UpdateInstanceRequest.field_mask] need be included.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\Instance
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Required. The instance to update, which must always include the instance
     * name.  Otherwise, only fields mentioned in [][google.spanner.admin.instance.v1.UpdateInstanceRequest.field_mask] need be included.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\Admin\Instance\V1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Instance\V1\Instance::class);
        $this->instance = $var;

        return $this;
    }

    /**
     * Required. A mask specifying which fields in [][google.spanner.admin.instance.v1.UpdateInstanceRequest.instance] should be updated.
     * The field mask must always be specified; this prevents any future fields in
     * [][google.spanner.admin.instance.v1.Instance] from being erased accidentally by clients that do not know
     * about them.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getFieldMask()
    {
        return $this->field_mask;
    }

    /**
     * Required. A mask specifying which fields in [][google.spanner.admin.instance.v1.UpdateInstanceRequest.instance] should be updated.
     * The field mask must always be specified; this prevents any future fields in
     * [][google.spanner.admin.instance.v1.Instance] from being erased accidentally by clients that do not know
     * about them.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->field_mask = $var;

        return $this;
    }

}

