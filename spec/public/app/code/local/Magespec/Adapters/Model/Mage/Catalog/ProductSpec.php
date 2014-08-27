<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Magespec_Adapters_Model_Mage_App as App;
class Magespec_Adapters_Model_Mage_Catalog_ProductSpec extends ObjectBehavior
{
    function let(App $app)
    {
        $this->beConstructedWith($app);
    }

    function it_returns_an_instance_of_Mage_Catalog_Product()
    {
        $this->getInstance()->shouldBeAnInstanceOf('Mage_Catalog_Model_Product');
    }
}
