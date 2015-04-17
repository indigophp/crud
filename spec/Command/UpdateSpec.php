<?php

namespace spec\Indigo\Crud\Command;

use Indigo\Crud\Stub\Entity;
use PhpSpec\ObjectBehavior;

class UpdateSpec extends ObjectBehavior
{
    function let(Entity $entity)
    {
        $this->beConstructedWith($entity, []);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Indigo\Crud\Command\Update');
    }

    function it_has_an_entity(Entity $entity)
    {
        $this->getEntity()->shouldReturn($entity);
    }

    function it_has_data()
    {
        $this->setData(['data']);
        $this->getData()->shouldReturn(['data']);
    }
}
