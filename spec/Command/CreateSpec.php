<?php

namespace spec\Indigo\Crud\Command;

use PhpSpec\ObjectBehavior;

class CreateSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Indigo\Crud\Stub\Entity', []);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Indigo\Crud\Command\Create');
    }

    function it_has_an_entity_class()
    {
        $this->getEntityClass()->shouldReturn('Indigo\Crud\Stub\Entity');
    }

    function it_has_data()
    {
        $this->setData(['data']);
        $this->getData()->shouldReturn(['data']);
    }
}
