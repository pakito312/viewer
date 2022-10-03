<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fe197e78794a7a137c2fc13ad7090f9
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Viewer\\Sysview\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Viewer\\Sysview\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fe197e78794a7a137c2fc13ad7090f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fe197e78794a7a137c2fc13ad7090f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5fe197e78794a7a137c2fc13ad7090f9::$classMap;

        }, null, ClassLoader::class);
    }
}
