<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitddfb6f1ec8f86e22f27e0944e1dda865
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/public',
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'C' => 
        array (
            'Cartalyst\\Sentry' => 
            array (
                0 => __DIR__ . '/..' . '/cartalyst/sentry/src',
            ),
        ),
    );

    public static $classMap = array (
        'Cartalyst\\Sentry\\Groups\\GroupExistsException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
        'Cartalyst\\Sentry\\Groups\\GroupNotFoundException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
        'Cartalyst\\Sentry\\Groups\\NameRequiredException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
        'Cartalyst\\Sentry\\Throttling\\UserBannedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
        'Cartalyst\\Sentry\\Throttling\\UserSuspendedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\LoginRequiredException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\PasswordRequiredException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserAlreadyActivatedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserExistsException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserNotActivatedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserNotFoundException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\WrongPasswordException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'MigrationCartalystSentryInstallGroups' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225929_migration_cartalyst_sentry_install_groups.php',
        'MigrationCartalystSentryInstallThrottle' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225988_migration_cartalyst_sentry_install_throttle.php',
        'MigrationCartalystSentryInstallUsers' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225921_migration_cartalyst_sentry_install_users.php',
        'MigrationCartalystSentryInstallUsersGroupsPivot' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitddfb6f1ec8f86e22f27e0944e1dda865::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitddfb6f1ec8f86e22f27e0944e1dda865::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitddfb6f1ec8f86e22f27e0944e1dda865::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitddfb6f1ec8f86e22f27e0944e1dda865::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitddfb6f1ec8f86e22f27e0944e1dda865::$classMap;

        }, null, ClassLoader::class);
    }
}