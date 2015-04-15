<?php

/*
 * This file is part of the Indigo CRUD package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Crud\Query;

use League\Tactician\Plugins\NamedCommand\NamedCommand;
use Indigo\Crud\CrudCommand;

/**
 * Finds all entities
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class FindAllEntities implements NamedCommand
{
    use CrudCommand;

    /**
     * @var string
     */
    protected $entityClass;

    /**
     * @param string $serviceName
     * @param string $entityClass
     */
    public function __construct($serviceName, $entityClass)
    {
        $this->serviceName = $serviceName;
        $this->entityClass = $entityClass;
    }

    /**
     * Returns the entity class
     *
     * @return string
     */
    public function getEntityClass()
    {
        return $this->entityClass;
    }
}