<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c6fe17f984b8b867f0c1f0f8b02b415
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PostVisitsWizard\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PostVisitsWizard\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c6fe17f984b8b867f0c1f0f8b02b415::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c6fe17f984b8b867f0c1f0f8b02b415::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
