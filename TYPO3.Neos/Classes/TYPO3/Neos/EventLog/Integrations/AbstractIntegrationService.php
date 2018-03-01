<?php
namespace TYPO3\Neos\EventLog\Integrations;

/*
 * This file is part of the TYPO3.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Neos\EventLog\Domain\Service\EventEmittingService;

abstract class AbstractIntegrationService
{
    /**
     * @Flow\Inject
     * @var EventEmittingService
     */
    protected $eventEmittingService;
}