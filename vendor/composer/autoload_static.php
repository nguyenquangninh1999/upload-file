<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b0a5f2f635acfcd14e525f1d07f569f
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Ninh\\Calculator\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ninh\\Calculator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b0a5f2f635acfcd14e525f1d07f569f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b0a5f2f635acfcd14e525f1d07f569f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9b0a5f2f635acfcd14e525f1d07f569f::$classMap;

        }, null, ClassLoader::class);
    }
}
