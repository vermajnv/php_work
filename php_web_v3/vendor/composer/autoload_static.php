<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit616b19dfe01c8e7fe062e2eeb9bbccc0
{
    public static $classMap = array (
        'CollegeController' => __DIR__ . '/../..' . '/controllers/college/collegeController.php',
        'CollegeModel' => __DIR__ . '/../..' . '/models/college/collegeModel.php',
        'HomeController' => __DIR__ . '/../..' . '/controllers/home/homeController.php',
        'LoginController' => __DIR__ . '/../..' . '/controllers/login/loginController.php',
        'LogoutController' => __DIR__ . '/../..' . '/controllers/logout/logoutController.php',
        'PublicController' => __DIR__ . '/../..' . '/controllers/public/publicController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit616b19dfe01c8e7fe062e2eeb9bbccc0::$classMap;

        }, null, ClassLoader::class);
    }
}
