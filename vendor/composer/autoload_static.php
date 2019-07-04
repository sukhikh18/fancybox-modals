<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb903afda440fc0b998640fc5c28d59ed
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NikolayS93\\WPAdminPage\\' => 23,
            'NikolayS93\\WPAdminForm\\' => 23,
            'NikolayS93\\FBModals\\' => 20,
            'NikolayS93\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NikolayS93\\WPAdminPage\\' => 
        array (
            0 => __DIR__ . '/..' . '/NikolayS93/wp-admin-page/src',
        ),
        'NikolayS93\\WPAdminForm\\' => 
        array (
            0 => __DIR__ . '/..' . '/NikolayS93/wp-admin-form/src',
        ),
        'NikolayS93\\FBModals\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
        'NikolayS93\\' => 
        array (
            0 => __DIR__ . '/..' . '/NikolayS93/wp-admin-table',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb903afda440fc0b998640fc5c28d59ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb903afda440fc0b998640fc5c28d59ed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
