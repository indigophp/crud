<?php

namespace spec\Indigo\Crud\Query;

use PhpSpec\ObjectBehavior;

class FindSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Indigo\Crud\Stub\Entity', 1);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Indigo\Crud\Query\Find');
    }

    function it_has_an_entity_class()
    {
        $this->getEntityClass()->shouldReturn('Indigo\Crud\Stub\Entity');
    }

    function it_has_an_id()
    {
        $this->getId()->shouldReturn(1);
    }
}
