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
 * Command holding data
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait HasData
{
    /**
     * @var array
     */
    protected $data;

    /**
     * Returns the data
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets the data
     *
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }
}
