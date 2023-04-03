<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit279b9292b1d8a4bf3a0b41f6c3a95c2f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit279b9292b1d8a4bf3a0b41f6c3a95c2f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit279b9292b1d8a4bf3a0b41f6c3a95c2f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit279b9292b1d8a4bf3a0b41f6c3a95c2f::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit279b9292b1d8a4bf3a0b41f6c3a95c2f::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire279b9292b1d8a4bf3a0b41f6c3a95c2f($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire279b9292b1d8a4bf3a0b41f6c3a95c2f($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
