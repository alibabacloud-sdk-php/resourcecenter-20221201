<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsResponseBody;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The key of the filter condition.
     *
     * @example RegionId
     *
     * @var string
     */
    public $key;

    /**
     * @description The values of the filter condition.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'key'    => 'Key',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
