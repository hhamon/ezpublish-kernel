<?php
/**
 * DeleteRelationSignal class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\ContentService;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * DeleteRelationSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\ContentService
 */
class DeleteRelationSignal extends Signal
{
    /**
     * Content ID
     *
     * @var mixed
     */
    public $srcContentId;

    /**
     * Version Number
     *
     * @var int
     */
    public $srcVersionNo;

    /**
     * Content ID
     *
     * @var mixed
     */
    public $dstContentId;
}
