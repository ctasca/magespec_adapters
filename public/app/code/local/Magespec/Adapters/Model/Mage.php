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

    public function unregister($key)
    {
        Mage::unregister($key);
    }

    public function getBaseDir($type = 'base')
    {
        return Mage::getBaseDir($type);
    }

    /**
     * Directory type can be:
     * - etc
     * - controllers
     * - sql
     * - data
     * - locale
     */
    public function getModuleDir($type, $moduleName)
    {
        return Mage::getModuleDir($type, $moduleName);
    }

    public function getStoreConfig($path, $store = null)
    {
        return Mage::getStoreConfig($path, $store);
    }

    public function getStoreConfigFlag($path, $store = null)
    {
        return Mage::getStoreConfigFlag($path, $store);
    }

    public function getConfig()
    {
        return Mage::getConfig();
    }

    public function getEvents()
    {
        return Mage::getEvents();
    }

    public function helper($name)
    {
        return Mage::helper($name);
    }
}
