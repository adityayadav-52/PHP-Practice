<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5150d67c95dcf00e536bac5d5c3b4042
{
    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'LucidFrame\\' => 
            array (
                0 => __DIR__ . '/..' . '/phplucidframe/console-table/src',
            ),
            'LucidFrameTest\\' => 
            array (
                0 => __DIR__ . '/..' . '/phplucidframe/console-table/tests',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5150d67c95dcf00e536bac5d5c3b4042::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5150d67c95dcf00e536bac5d5c3b4042::$classMap;

        }, null, ClassLoader::class);
    }
}