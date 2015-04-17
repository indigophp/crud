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
 * Object holding an entity class name
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait HasEntityClass
{
    /**
     * @var string
     */
    protected $entityClass;

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
