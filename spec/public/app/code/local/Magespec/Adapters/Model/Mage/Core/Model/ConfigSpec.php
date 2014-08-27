<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Magespec_Adapters_Model_Mage_App as App;

class Magespec_Adapters_Model_Mage_Core_Model_ConfigSpec extends ObjectBehavior
{
    function let(App $app)
    {
        $this->beConstructedWith($app);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Magespec_Adapters_Model_Mage_Core_Model_Config');
    }

    function it_returns_a_model_instance()
    {
        $this->getModelInstance('catalog/product')->shouldBeObject();
    }

    function it_returns_an_instance_of_Mage_Catalog_Model_Product()
    {
        $this->getModelInstance('catalog/product')->shouldBeAnInstanceOf('Mage_Catalog_Model_Product');
    }
}
