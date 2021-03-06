<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4d84085b415e9d8cf8b5e6344680409
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4d84085b415e9d8cf8b5e6344680409::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4d84085b415e9d8cf8b5e6344680409::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4d84085b415e9d8cf8b5e6344680409::$classMap;

        }, null, ClassLoader::class);
    }
}
