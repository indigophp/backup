<?php
/*
 * This file is part of the Indigo Backup package.
 *
 * (c) IndigoPHP Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Backup\Destination;

interface DestinationInterface
{
    /**
     * Save files to destination
     *
     * @param  array   $files
     * @return boolean Succes or failure
     */
    public function save(array $files);
}
