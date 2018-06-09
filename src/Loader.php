<?php
/**
 * Syx loader
 */

namespace Syx;

class Loader
{
    /**
     * Loader constructor
     */
    private function __construct()
    {
    }

    /**
     * Loads a PHP file.  This is a wrapper for PHP's include() function.
     * $filename must be the complete filename, including any
     * extension such as ".php".  Note that a security check is performed that
     * does not permit extended characters in the filename.  This method is
     * intended for loading Zend Framework files.
     * If $dirs is a string or an array, it will search the directories
     * in the order supplied, and attempt to load the first matching file.
     * If the file was not found in the $dirs, or if no $dirs were specified,
     * it will attempt to load it from PHP's include_path.
     *
     * @param  string $filename
     * @param  string|array $dirs - OPTIONAL either a path or array of paths
     *                            to search.
     * @return boolean
     */

    /**
     * import
     * @description Loads a PHP file
     * @param string $filename
     * @return bool
     * @throws Exception
     */
    public static function import($filename)
    {

    }

    /**
     * Retrieve singleton instance
     *
     * @return Loader
     */
    /**
     * getInstance
     * @description Retrieve singleton instance
     * @param string|null $library
     * @param string|null $globalLibrary
     * @return Loader
     */
    public static function getInstance($library = NULL, $globalLibrary = NULL)
    {

    }


    /**
     * getLocalNamespace
     * @description Get local namespace
     * @return string|null
     */
    public function getLocalNamespace()
    {

    }

    /**
     * clearLocalNamespace
     * @description Clear local namespace
     * @return void
     */
    public function clearLocalNamespace()
    {

    }

    /**
     * getLibraryPath
     * @description Get base path to this set of resources
     * @param bool $isGlobal false=>local_libraray  true=>global_library
     * @return string
     */
    public function getLibraryPath($isGlobal = FALSE)
    {

    }

    /**
     * isLocalName
     * @description check class is local class
     * @param $className
     * @return bool
     */
    public function isLocalName($className)
    {

    }

    /**
     * registerLocalNamespace
     * @description register a namespace for the loader
     * @param string|array $namespace
     * @throws Exception if namespace is not string or array
     * @return void
     */
    public function registerLocalNamespace($namespace)
    {

    }

    /**
     * setLibraryPath
     * @description
     * @param string $path
     * @param bool $isGlobal false=>local_libraray  true=>global_library
     */
    public function setLibraryPath($path, $isGlobal = FALSE)
    {

    }

    /**
     * __clone
     * @description disallow cloning
     */
    private function __clone()
    {

    }

    /**
     * __sleep
     * @description disallow serialization
     */
    private function __sleep()
    {

    }

    /**
     * __wakeup
     * @description disallow serialization
     */
    private function __wakeup()
    {

    }
}
