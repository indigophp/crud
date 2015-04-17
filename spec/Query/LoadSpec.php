<?php

namespace spec\Indigo\Crud\Query;

use PhpSpec\ObjectBehavior;

class LoadSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Indigo\Crud\Stub\Entity', 1);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Indigo\Crud\Query\Load');
    }

    function it_is_a_command()
    {
        $this->shouldImplement('League\Tactician\Plugins\NamedCommand\NamedCommand');
    }

    function it_has_a_command_name()
    {
        $this->getCommandName()->shouldReturn('Indigo\Crud\Stub\Entity::load');
    }

    function it_has_an_original_name()
    {
        $this->getOriginalCommandName()->shouldReturn('load');
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
