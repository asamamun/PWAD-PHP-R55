<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2cf728ae71d3261f5911b32fa6f3d99
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimplePie\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimplePie\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplepie/simplepie/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SimplePie' => 
            array (
                0 => __DIR__ . '/..' . '/simplepie/simplepie/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2cf728ae71d3261f5911b32fa6f3d99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2cf728ae71d3261f5911b32fa6f3d99::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc2cf728ae71d3261f5911b32fa6f3d99::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc2cf728ae71d3261f5911b32fa6f3d99::$classMap;

        }, null, ClassLoader::class);
    }
}
