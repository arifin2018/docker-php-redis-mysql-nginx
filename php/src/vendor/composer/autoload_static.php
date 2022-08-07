<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51b5b66630b0f15b3ffeff2f8d0f40ea
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51b5b66630b0f15b3ffeff2f8d0f40ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51b5b66630b0f15b3ffeff2f8d0f40ea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit51b5b66630b0f15b3ffeff2f8d0f40ea::$classMap;

        }, null, ClassLoader::class);
    }
}
