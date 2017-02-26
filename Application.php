<?php
/**
 * Syx Application
 */

namespace Syx;

class Application
{
    /**
     * @var Application
     */
    protected static $_app = NULL;

    /**
     * @var ConfigAbstract
     */
    protected $_config = NULL;

    /**
     * @var Dispatcher
     */
    protected $_dispatcher = NULL;
    protected $_modules = [];
    protected $_running = FALSE;
    protected $_environ = NULL;
    protected $_options = [];
    protected $_errno = 0;
    protected $_errmsg = '';

    /**
     * Application constructor.
     * @param string|array $config
     * @param string|null $env
     */
    public function __construct($config, $environ = NULL)
    {

    }

    /**
     * app
     * @description Retrieve application instance
     * @return Application
     */
    public static function app()
    {
        return self::$_app;
    }

    /**
     * Application Destruct
     */
    public function __destruct()
    {

    }

    /**
     * bootstrap
     * @description bootstrap
     * @version 1.0.0
     * @return $this
     * @throws Exception
     */
    public function bootstrap()
    {

    }

    /**
     * run
     * @description run
     * @throws Exception\DispatchFailed
     * @throws Exception\StartupError
     * @throws Exception\TypeError
     * @throws \Exception
     * @return void|\Syx\ResponseAbstract
     */
    public function run()
    {

    }

    /**
     * getConfig
     * @description Retrieve the config instance
     * @return array|ConfigAbstract
     */
    public function getConfig()
    {

    }


    /**
     * getDispatcher
     * @description Get \Syx\Dispatcher instance
     * @return Dispatcher
     */
    public function getDispatcher()
    {
        return $this->_dispatcher;
    }

    /**
     * getModules
     * @description Get defined module names
     * @return array
     */
    public function getModules()
    {

    }

    /**
     * environ
     * @description Retrieve environment
     * @return null|string
     */
    public function environ()
    {

    }


    /**
     * execute
     * @description Perform custom functions
     * @param callable $entry
     * @param array ...$args
     */
    public function execute( callable $entry, ...$args )
    {

    }

    /**
     * getAppDirectory
     * @description Get App Directory
     * @return string
     */
    public function getAppDirectory()
    {

    }

    /**
     * setAppDirectory
     * @description Set App Directory
     * @param string $directory
     * @return $this|bool
     */
    public function setAppDirectory(string $directory)
    {

    }

    /**
     * setErrorNo
     * @description Set \Syx\Application errno
     * @param integer $errno
     */
    public function setErrorNo(int $errno)
    {

    }

    /**
     * setErrorMsg
     * @description Set \Syx\Application errmsg
     * @param string $msg
     */
    public function setErrorMsg(string $msg)
    {

    }

    /**
     * clearLastError
     * @description Clear Last Error
     */
    public function clearLastError()
    {

    }

    /**
     * getLastErrorMsg
     * @description Get \Syx\Application Last errmsg
     * @return string
     */
    public function getLastErrorMsg()
    {
        return $this->_errmsg;
    }

    /**
     * getLastErrorNo
     * @description Get \Syx\Application Last errno
     * @return int
     */
    public function getLastErrorNo()
    {

    }

    /**
     * __clone
     * @description \Syx\Application can not be cloned
     */
    private function __clone()
    {

    }

    /**
     * __sleep
     * @description \Syx\Application can not be serialized
     */
    private function __sleep()
    {

    }

    /**
     * __wakeup
     * @description \Syx\Application can not be deserialized
     */
    private function __wakeup()
    {

    }
}
