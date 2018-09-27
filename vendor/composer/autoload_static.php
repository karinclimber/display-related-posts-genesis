<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e9bc0c78c8b48b9d9f1bf8727ff3dc2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SeoThemes\\DisplayRelatedPostsGenesis\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SeoThemes\\DisplayRelatedPostsGenesis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e9bc0c78c8b48b9d9f1bf8727ff3dc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e9bc0c78c8b48b9d9f1bf8727ff3dc2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}