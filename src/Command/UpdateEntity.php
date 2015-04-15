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
 * Updates an entity
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class UpdateEntity implements NamedCommand
{
    use CrudCommand;
    use HasData;
    use HasEntity;

    /**
     * @param string $serviceName
     * @param object $entity
     * @param array  $data
     */
    public function __construct($serviceName, $entity, array $data)
    {
        $this->serviceName = $serviceName;
        $this->entity = $entity;
        $this->data = $data;
    }
}
