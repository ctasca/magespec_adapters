<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Mage;
use Magespec_Adapters_Model_Mage_App as App;
use Magespec_Adapters_Model_Mage_Catalog_Product as Product;

class Magespec_Adapters_Model_MageSpec extends ObjectBehavior
{

    function let(App $app)
    {
        $this->beConstructedWith($app);
    }

    function it_returns_magento_version()
    {
        $this->getVersion()->shouldReturn('1.14.0.1');
    }

    function it_returns_magento_version_info_array()
    {
        $this->getVersionInfo()->shouldBeArray();
    }

    function it_returns_magento_edition()
    {
        $this->getEdition()->shouldReturn('Enterprise');
    }

    function it_returns_null_when_given_key_is_not_in_registry()
    {
        $this->registry('test')->shouldBeNull();
    }

    function it_retrieve_a_value_from_registry_by_key()
    {
        $this->register('test_product', Mage::getModel('catalog/product'), false);
        $this->registry('test_product')->shouldBeAnInstanceOf('Mage_Catalog_Model_Product');
    }

    function it_throws_a_Mage_Core_Exception_when_a_key_is_already_in_registry()
    {
        $this->shouldThrow('Mage_Core_Exception')->during('register', array('test_product', Mage::getModel('catalog/product'), false));
    }

    function it_unregister_given_key_from_registry()
    {
        $this->unregister('test_product');
        $this->registry('test_product')->shouldBeNull();
    }

    function it_gets_application_root_absolute_path()
    {
        $this->getBaseDir()->shouldBeString();
    }

    /**
     * Directory type can be:
     * - etc
     * - controllers
     * - sql
     * - data
     * - locale
     */
    function it_retrieves_module_absolute_path_by_directory_type()
    {
        $this->getModuleDir('etc', 'Magespec_Adapters')->shouldReturn('/vagrant/public/app/code/local/Magespec/Adapters/etc');
    }

    function it_gets_store_unsecure_base_url()
    {
        $this->getStoreConfig('web/unsecure/base_url')->shouldReturn('http://adapters.development.local.dev/');
    }

    function it_returns_true_when_real_configuration_path_for_unsecure_url_is_given()
    {
        $this->getStoreConfigFlag('web/unsecure/base_url')->shouldReturn(true);
    }

    function it_returns_false_when_an_undefined_configuration_path_is_given()
    {
        $this->getStoreConfigFlag('web/unsecure/undefined')->shouldReturn(false);
    }

    function it_retrieves_a_configuration_instance()
    {
        $this->getConfig()->shouldBeAnInstanceOf('Mage_Core_Model_Config');
    }

    function it_retrieves_events_collection()
    {
        $this->getEvents()->shouldBeAnInstanceOf('Varien_Event_Collection');
    }

    function it_returns_an_instance_of_Mage_Catalog_Helper_Data()
    {
        $this->helper('catalog')->shouldBeAnInstanceOf('Mage_Catalog_Helper_Data');
    }
}
