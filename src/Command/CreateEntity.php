<?php

/*
 * This file is part of the Indigo CRUD package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Crud\Command;

use League\Tactician\Plugins\NamedCommand\NamedCommand;
use Indigo\Crud\CrudCommand;

/**
 * Creates a new entity
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class CreateEntity implements NamedCommand
{
    use CrudCommand;
    use HasData;

    /**
     * @var string
     */
    protected $entityClass;

    /**
     * @param string $serviceName
     * @param string $entityClass
     * @param array  $data
     */
    public function __construct($serviceName, $entityClass, array $data)
    {
        $this->serviceName = $serviceName;
        $this->entityClass = $entityClass;
        $this->data = $data;
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
