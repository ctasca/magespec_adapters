<?php

class Magespec_Adapters_Model_Mage
{
    private $_app;

    public function __construct(Magespec_Adapters_Model_Mage_App $app)
    {
        $this->_app = $app;
    }

    public function getVersion()
    {
        return Mage::getVersion();
    }

    public function getVersionInfo()
    {
        return Mage::getVersionInfo();
    }

    public function getEdition()
    {
        return Mage::getEdition();
    }

    public function register($key, $value, $graceful = false)
    {
        Mage::register($key, $value, $graceful);
    }

    public function registry($key)
    {
        return Mage::registry($key);
    }
}
