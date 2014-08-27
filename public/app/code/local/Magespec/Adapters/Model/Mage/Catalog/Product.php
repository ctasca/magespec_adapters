<?php

class Magespec_Adapters_Model_Mage_Catalog_Product
{

    private $_app;

    public function __construct(Magespec_Adapters_Model_Mage_App $app)
    {
        $this->_app = $app;
    }

    public function getInstance()
    {
        return Mage::getModel('catalog/product');
    }

}
