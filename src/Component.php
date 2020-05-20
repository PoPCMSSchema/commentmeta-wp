<?php

declare(strict_types=1);

namespace PoP\CommentMetaWP;

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
            \PoP\CommentMeta\Component::class,
            \PoP\CommentsWP\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        return [
            'migrate-commentmeta-wp',
        ];
    }
}
