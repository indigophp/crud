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
use Indigo\Crud\Helper\HasData;
use Indigo\Crud\Helper\HasEntity;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class Update implements NamedCommand
{
    use HasData;
    use HasEntity;

    /**
     * @param object $entity
     * @param array  $data
     */
    public function __construct($entity, array $data)
    {
        $this->entity = $entity;
        $this->data = $data;
    }
}
