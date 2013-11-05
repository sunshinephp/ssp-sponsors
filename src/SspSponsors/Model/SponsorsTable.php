<?php

namespace SspSponsors\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class SponsorsTable
{
    protected $tableGateway;

    public function __construct(Adapter $adapter)
    {
        $this->tableGateway = new TableGateway('sponsors', $adapter);
    }

    public function findAll()
    {
        $rows = $this->tableGateway->select(function (Select $select) {
                $select->where('is_active = 1');
                $select->order('sort ASC');
            });

        return $rows->toArray();
    }
}
