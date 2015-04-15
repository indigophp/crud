<?php

namespace spec\Indigo\Crud\Query;

use PhpSpec\ObjectBehavior;

class FindAllEntitiesSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('service', 'Indigo\Crud\Stub\Entity');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Indigo\Crud\Query\FindAllEntities');
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
        $this->getCommandName()->shouldReturn('service.findAllEntities');
    }

    function it_has_an_original_name()
    {
        $this->getOriginalCommandName()->shouldReturn('findAllEntities');
    }

    function it_has_an_entity_class()
    {
        $this->getEntityClass()->shouldReturn('Indigo\Crud\Stub\Entity');
    }
}
