<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit722d8319e12611a478610ac21bdb5965
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit722d8319e12611a478610ac21bdb5965::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit722d8319e12611a478610ac21bdb5965::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
