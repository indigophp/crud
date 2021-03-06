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

use Indigo\Crud\Helper\HasEntity;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class Delete
{
    use HasEntity;

    /**
     * @param string $serviceName
     * @param object $entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }
}
