<?php
/**
 * File containing the LegacyDbHandlerFactory class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Bundle\EzPublishCoreBundle\ApiLoader;

use eZ\Publish\Core\Persistence\Doctrine\ConnectionHandler;
use eZ\Publish\Core\MVC\ConfigResolverInterface;

class LegacyDbHandlerFactory
{

    /**
     * @var \eZ\Publish\Core\MVC\ConfigResolverInterface
     */
    protected $configResolver;

    public function __construct( ConfigResolverInterface $resolver )
    {
        $this->configResolver = $resolver;
    }

    /**
     * Builds the DB handler used by the legacy storage engine.
     *
     * @return \eZ\Publish\Core\Persistence\Doctrine\ConnectionHandler
     */
    public function buildLegacyDbHandler()
    {
        return ConnectionHandler::createFromDSN(
            $this->configResolver->getParameter( 'database.params' )
        );
    }
}
