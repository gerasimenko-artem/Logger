<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c07b4a41db0edb4017faee28b90ec7b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'Logger\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Logger\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c07b4a41db0edb4017faee28b90ec7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c07b4a41db0edb4017faee28b90ec7b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c07b4a41db0edb4017faee28b90ec7b::$classMap;

        }, null, ClassLoader::class);
    }
}
