<?php

class Model_Customer_Address_Resource extends Model_Core_Table_Resource
{
    public function __construct()
    {
        parent::__construct();

        $this->setResourceName('Customer_Address');
        $this->setPrimaryKey('address_id');
    }
}


?>