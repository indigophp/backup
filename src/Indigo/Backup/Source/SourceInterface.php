<?php
/*
 * This file is part of the Indigo Backup package.
 *
 * (c) IndigoPHP Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Backup\Source;

interface SourceInterface
{
    /**
     * Run backup
     *
     * @return array List of files to backup
     */
    public function backup();
}
