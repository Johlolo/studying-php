<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3eab676fec93cf2a88d35ff202b9b87
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitd3eab676fec93cf2a88d35ff202b9b87::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd3eab676fec93cf2a88d35ff202b9b87::$classMap;

        }, null, ClassLoader::class);
    }
}