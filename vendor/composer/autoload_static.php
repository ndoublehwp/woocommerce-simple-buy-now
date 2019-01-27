<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1ba17b129fa83ed5c7427ef41b6cd8d
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WooCommerce_Simple_Buy_Now\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WooCommerce_Simple_Buy_Now\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1ba17b129fa83ed5c7427ef41b6cd8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1ba17b129fa83ed5c7427ef41b6cd8d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}