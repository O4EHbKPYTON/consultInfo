<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1755aabbd0a1dc192c3176db56e68285
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1755aabbd0a1dc192c3176db56e68285::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1755aabbd0a1dc192c3176db56e68285::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1755aabbd0a1dc192c3176db56e68285::$classMap;

        }, null, ClassLoader::class);
    }
}
