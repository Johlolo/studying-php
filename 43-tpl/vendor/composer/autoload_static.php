<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf44aff25e347fdb7654fe9ed6d7e796b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf44aff25e347fdb7654fe9ed6d7e796b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf44aff25e347fdb7654fe9ed6d7e796b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf44aff25e347fdb7654fe9ed6d7e796b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf44aff25e347fdb7654fe9ed6d7e796b::$classMap;

        }, null, ClassLoader::class);
    }
}
