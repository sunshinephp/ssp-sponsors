<?php

namespace SspSponsors\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;

class SponsorsTable
{
    protected $tableGateway;
    
    public function __construct(Adapter $adapter)
    {
        $this->tableGateway = new TableGateway('sponsors', $adapter);
    }
    
    public function findAll()
    {
        $rows = $this->tableGateway->select();
        return $rows->toArray();
    }
}
