<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ba4af9dacd6879270e07a2f30c33ffe
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ba4af9dacd6879270e07a2f30c33ffe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ba4af9dacd6879270e07a2f30c33ffe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ba4af9dacd6879270e07a2f30c33ffe::$classMap;

        }, null, ClassLoader::class);
    }
}
