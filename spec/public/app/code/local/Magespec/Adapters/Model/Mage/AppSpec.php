<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Magespec_Adapters_Model_Mage_AppSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Magespec_Adapters_Model_Mage_App');
    }

    function it_returns_an_instance_of_Mage_Core_Model_App()
    {
        $this->load()->shouldBeAnInstanceOf('Mage_Core_Model_App');
    }
}
