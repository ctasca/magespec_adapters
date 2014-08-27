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
}
