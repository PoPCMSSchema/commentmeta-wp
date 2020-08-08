<?php

declare(strict_types=1);

namespace PoPSchema\CommentMetaWP;

use PoP\Root\Component\AbstractComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoPSchema\CommentMeta\Component::class,
            \PoPSchema\CommentsWP\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        return [
            'migrate-commentmeta-wp',
        ];
    }
}
