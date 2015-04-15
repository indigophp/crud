<?php

/*
 * This file is part of the Indigo CRUD package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Crud;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait CrudCommand
{
    /**
     * @var string
     */
    protected $serviceName = 'crud';

    /**
     * Returns the service name
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return $this->serviceName.'.'.$this->getOriginalCommandName();
    }

    /**
     * Returns the original name of the command
     *
     * @return string
     */
    public function getOriginalCommandName()
    {
        return lcfirst(substr(strrchr(get_class($this), '\\'), 1));
    }
}
