<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateMultiAccountDeliveryChannelRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateMultiAccountDeliveryChannelRequest\resourceSnapshotDelivery\slsProperties;

class resourceSnapshotDelivery extends Model
{
    /**
     * @var string
     */
    public $customExpression;

    /**
     * @var string
     */
    public $deliveryTime;

    /**
     * @var string
     */
    public $enabled;

    /**
     * @var slsProperties
     */
    public $slsProperties;

    /**
     * @var string
     */
    public $targetArn;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'customExpression' => 'CustomExpression',
        'deliveryTime' => 'DeliveryTime',
        'enabled' => 'Enabled',
        'slsProperties' => 'SlsProperties',
        'targetArn' => 'TargetArn',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        if (null !== $this->slsProperties) {
            $this->slsProperties->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customExpression) {
            $res['CustomExpression'] = $this->customExpression;
        }

        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->slsProperties) {
            $res['SlsProperties'] = null !== $this->slsProperties ? $this->slsProperties->toArray($noStream) : $this->slsProperties;
        }

        if (null !== $this->targetArn) {
            $res['TargetArn'] = $this->targetArn;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomExpression'])) {
            $model->customExpression = $map['CustomExpression'];
        }

        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['SlsProperties'])) {
            $model->slsProperties = slsProperties::fromMap($map['SlsProperties']);
        }

        if (isset($map['TargetArn'])) {
            $model->targetArn = $map['TargetArn'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
