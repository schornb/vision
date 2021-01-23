<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39f5e29b11f8b1c5422f30fa0134f457
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit39f5e29b11f8b1c5422f30fa0134f457::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39f5e29b11f8b1c5422f30fa0134f457::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39f5e29b11f8b1c5422f30fa0134f457::$classMap;

        }, null, ClassLoader::class);
    }
}