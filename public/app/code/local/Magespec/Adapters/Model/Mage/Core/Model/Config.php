<?php

class Magespec_Adapters_Model_Mage_Core_Model_Config
{
    private $_app;

    public function __construct(Magespec_Adapters_Model_Mage_App $app)
    {
        $this->_app = $app;
    }

    public function getModelInstance($model, $arguments = array())
    {
        //$this->_app->load();
        return Mage::getModel($model, $arguments);
    }
}
