<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetExampleQueryResponseBody;

use AlibabaCloud\Tea\Model;

class exampleQuery extends Model
{
    /**
     * @description The description of the template.
     *
     * @example Queries all resources on which you have permissions and sorts the resources by resource type and resource ID.
     *
     * @var string
     */
    public $description;

    /**
     * @description The query statement in the template.
     *
     * @example SELECT
     * 1000 OFFSET 0;
     * @var string
     */
    public $expression;

    /**
     * @description The name of the template.
     *
     * @example Query of All Alibaba Cloud Resources
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the template.
     *
     * @example sq-0PfKy****
     *
     * @var string
     */
    public $queryId;
    protected $_name = [
        'description' => 'Description',
        'expression'  => 'Expression',
        'name'        => 'Name',
        'queryId'     => 'QueryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exampleQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        return $model;
    }
}
