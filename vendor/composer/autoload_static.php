<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit765be533718409a5bcff302896b3b488
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit765be533718409a5bcff302896b3b488::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
