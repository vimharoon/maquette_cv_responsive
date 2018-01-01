<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdad946b2380b8377394c40d02b12aea
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdad946b2380b8377394c40d02b12aea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdad946b2380b8377394c40d02b12aea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}