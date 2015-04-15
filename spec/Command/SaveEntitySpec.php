<?php

namespace spec\Indigo\Crud\Command;

use Indigo\Crud\Stub\Entity;
use PhpSpec\ObjectBehavior;

class SaveEntitySpec extends ObjectBehavior
{
    function let(Entity $entity)
    {
        $this->beConstructedWith('service', $entity);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Indigo\Crud\Command\SaveEntity');
    }

    function it_is_a_command()
    {
        $this->shouldImplement('League\Tactician\Plugins\NamedCommand\NamedCommand');
    }

    function it_has_a_service_name()
    {
        $this->getServiceName()->shouldReturn('service');
    }

    function it_has_a_command_name()
    {
        $this->getCommandName()->shouldReturn('service.saveEntity');
    }

    function it_has_an_original_name()
    {
        $this->getOriginalCommandName()->shouldReturn('saveEntity');
    }

    function it_has_an_entity(Entity $entity)
    {
        $this->getEntity()->shouldReturn($entity);
    }
}
