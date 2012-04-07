<?php
/**
 * File containing a test class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\API\REST\Client\Tests\Input\Parser;
use eZ\Publish\API\REST\Server\Tests;

abstract class BaseTest extends Tests\BaseTest
{
    /**
     * @var \eZ\Publish\API\REST\Common\Input\ParsingDispatcher
     */
    protected function getParsingDispatcherMock()
    {
        if ( !isset( $this->parsingDispatcherMock ) )
        {
            $this->parsingDispatcherMock = $this->getMock(
                '\\eZ\\Publish\\API\\REST\\Common\\Input\\ParsingDispatcher',
                array(),
                array(),
                '',
                false
            );
        }
        return $this->parsingDispatcherMock;
    }
}
