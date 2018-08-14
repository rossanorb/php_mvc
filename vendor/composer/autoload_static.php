<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd38eb04e62fb9ba5eda32aea1f4ab370
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/Framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd38eb04e62fb9ba5eda32aea1f4ab370::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd38eb04e62fb9ba5eda32aea1f4ab370::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}