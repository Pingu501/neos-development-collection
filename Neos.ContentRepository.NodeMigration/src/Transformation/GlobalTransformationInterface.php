<?php

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

declare(strict_types=1);

namespace Neos\ContentRepository\NodeMigration\Transformation;

use Neos\ContentRepository\Core\SharedModel\Workspace\WorkspaceName;

/**
 * A globally-done transformation, like changing dimension space points globally.
 *
 * Settings given to a transformation will be passed to accordingly named setters.
 */
interface GlobalTransformationInterface
{
    public function execute(
        WorkspaceName $workspaceNameForWriting,
    ): void;
}
