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
class Find
{
    use HasEntityClass;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @param string  $entityClass
     * @param integer $id
     */
    public function __construct($entityClass, $id)
    {
        $this->entityClass = $entityClass;
        $this->id = $id;
    }

    /**
     * Returns the ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
