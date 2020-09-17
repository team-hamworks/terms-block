<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e31bec161bb211eadf754d9d92158f5
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HAMWORKS\\WP\\Dynamic_Block\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HAMWORKS\\WP\\Dynamic_Block\\' => 
        array (
            0 => __DIR__ . '/..' . '/hamworks/wp-dynamic-block/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e31bec161bb211eadf754d9d92158f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e31bec161bb211eadf754d9d92158f5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}