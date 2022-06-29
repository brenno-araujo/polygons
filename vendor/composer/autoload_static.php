<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6306194482e56c1750d3d6984549d9b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6306194482e56c1750d3d6984549d9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6306194482e56c1750d3d6984549d9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6306194482e56c1750d3d6984549d9b::$classMap;

        }, null, ClassLoader::class);
    }
}
