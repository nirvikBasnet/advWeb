<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5e16f51a0521edc9ee30abf469936b1
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'advweb\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'advweb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5e16f51a0521edc9ee30abf469936b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5e16f51a0521edc9ee30abf469936b1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite5e16f51a0521edc9ee30abf469936b1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
