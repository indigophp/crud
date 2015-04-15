<?php

namespace spec\Indigo\Crud\Command;

use PhpSpec\ObjectBehavior;

class CreateEntitySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('service', 'Indigo\Crud\Stub\Entity', []);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Indigo\Crud\Command\CreateEntity');
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
        $this->getCommandName()->shouldReturn('service.createEntity');
    }

    function it_has_an_original_name()
    {
        $this->getOriginalCommandName()->shouldReturn('createEntity');
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
