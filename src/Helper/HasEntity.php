<?php

/*
 * This file is part of the Indigo CRUD package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Crud\Helper;

/**
 * Command holding an entity object
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait HasEntity
{
    /**
     * @var object
     */
    protected $entity;

    /**
     * Returns the entity
     *
     * @return object
     */
    public function getEntity()
    {
        return $this->entity;
    }
}
