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

    function it_is_a_command()
    {
        $this->shouldImplement('League\Tactician\Plugins\NamedCommand\NamedCommand');
    }

    function it_has_a_command_name()
    {
        $this->getCommandName()->shouldReturn('Indigo\Crud\Stub\Entity::create');
    }

    function it_has_an_original_name()
    {
        $this->getOriginalCommandName()->shouldReturn('create');
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
