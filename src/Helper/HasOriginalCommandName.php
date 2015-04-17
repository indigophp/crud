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
 * Identifies an original command name extracted from the class name
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait HasOriginalCommandName
{
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
