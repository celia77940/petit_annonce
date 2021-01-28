<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd769ffa026a21d237e1d930b45e8349e
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd769ffa026a21d237e1d930b45e8349e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd769ffa026a21d237e1d930b45e8349e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd769ffa026a21d237e1d930b45e8349e::$classMap;

        }, null, ClassLoader::class);
    }
}
