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

use Indigo\Crud\Helper\HasEntityClass;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class FindAll
{
    use HasEntityClass;

    /**
     * @param string $entityClass
     */
    public function __construct($entityClass)
    {
        $this->entityClass = $entityClass;
    }
}
