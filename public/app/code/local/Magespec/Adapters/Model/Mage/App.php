<?php

class Magespec_Adapters_Model_Mage_App
{
    /**
     * Loads Magento app in adapters
     *
     * Solves PHP Fatal error such as:
     * Call to a member function getModelInstance() on a non-object in /vagrant/public/app/Mage.php on line 463
     *
     * @return Mage_Core_Model_App
     */
    public function load()
    {
        return Mage::app();
    }
}
