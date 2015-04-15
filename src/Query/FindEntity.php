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
 * Finds an entity
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class FindEntity implements NamedCommand
{
    use CrudCommand;
    use HasEntityClass;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @param string  $serviceName
     * @param string  $entityClass
     * @param integer $id
     */
    public function __construct($serviceName, $entityClass, $id)
    {
        $this->serviceName = $serviceName;
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
