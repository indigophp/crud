<?php

namespace spec\Indigo\Crud\Command;

use Indigo\Crud\Stub\Entity;
use PhpSpec\ObjectBehavior;

class DeleteSpec extends ObjectBehavior
{
    function let(Entity $entity)
    {
        $this->beConstructedWith($entity);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Indigo\Crud\Command\Delete');
    }

    function it_is_a_command()
    {
        $this->shouldImplement('League\Tactician\Plugins\NamedCommand\NamedCommand');
    }

    function it_has_a_command_name(Entity $entity)
    {
        $this->getCommandName()->shouldReturn(get_class($entity->getWrappedObject()).'::delete');
    }

    function it_has_an_original_name()
    {
        $this->getOriginalCommandName()->shouldReturn('delete');
    }

    function it_has_an_entity(Entity $entity)
    {
        $this->getEntity()->shouldReturn($entity);
    }
}
