<?php
/**
 * Syx Dispatcher
 */

namespace Syx;

class Dispatcher
{
    /**
     * @var Dispatcher Singleton instance
     */
    protected static $_instance = NULL;

    /**
     * @var \Syx\Router
     */
    protected $_router = NULL;

    /**
     * @var \Syx\ViewInterface
     */
    protected $_view = NULL;

    /**
     * @var \Syx\RequestAbstract
     */
    protected $_request = NULL;

    /**
     * @var array holds the references to the plugins
     */
    protected $_plugins = [];

    /**
     * @var bool Whether or not to enable view
     */
    protected $_auto_render = TRUE;

    protected $_returnResponse = FALSE;
    
    protected $_instantly_flush = FALSE;

    /**
     * Dispatcher constructor.
     */
    protected function __construct()
    {

    }

    /**
     * getInstance
     * @description Get Singleton instance
     * @return Dispatcher
     */
    public static function getInstance()
    {

    }

    /**
     * autoRender
     * @description Whether or not to enable view
     * @param bool $flag
     * @return void
     */
    public function autoRender($flag)
    {

    }

    /**
     * Set the throwExceptions flag and retrieve current status
     * Set whether exceptions encounted in the dispatch loop should be thrown
     * or caught and trapped in the response object.
     * Default behaviour is to trap them in the response object; call this
     * method to have them thrown.
     * Passing no value will return the current value of the flag; passing a
     * boolean true or false value will set the flag and return the current
     * object instance.
     *
     * @param boolean $flag Defaults to null (return flag state)
     * @return boolean|\Syx\Dispatcher when used as a setter,
     *                      returns object; as a getter, returns boolean
     */
    public function catchException($flag = NULL)
    {

    }

    /**
     * disableView
     * @description Disable View
     * @return void
     */
    public function disableView()
    {

    }

    /**
     * enableView
     * @description Enable View
     */
    public function enableView()
    {

    }

    /**
     * dispatch
     * @description
     * @param RequestAbstract|NULL $request
     * @return Response\Cli|Response\Http
     * @throws Exception\DispatchFailed
     * @throws Exception\TypeError
     * @throws \Exception
     */
    public function dispatch(RequestAbstract $request = NULL)
    {

    }

    /**
     * flushInstantly
     * @description Open|Close Automatic response
     * @param bool $flag
     * @return Dispatcher|void
     */
    public function flushInstantly($flag)
    {

    }

    /**
     * getApplication
     * @description returns the application object
     * @return Application
     */
    public function getApplication()
    {

    }

    /**
     * getRequest
     * @description Return the request object
     * @return RequestAbstract|null
     */
    public function getRequest()
    {

    }


    /**
     * setRequest
     * @description Set the request object
     * @param RequestAbstract $request
     * @return Dispatcher
     */
    public function setRequest(RequestAbstract $request)
    {

    }

    /**
     * getRouter
     * @description Return the router object
     * @return Router
     */
    public function getRouter()
    {

    }

    /**
     * getView
     * @description get view
     * @return View\Simple|ViewInterface
     */
    public function getView()
    {

    }
    /**
     * initView
     * @description Init View
     * @param null|string $templates_dir
     * @param array $options
     * @return View\Simple|ViewInterface
     */
    public function initView($templates_dir = NULL, array $options = [])
    {

    }

    /**
     * registerPlugin
     * @description Register a plugin
     * @param PluginAbstract $plugin
     * @return Dispatcher
     */
    public function registerPlugin(PluginAbstract $plugin)
    {

    }

    /**
     * returnResponse
     * @description The returnResponse purpose
     * @param bool|null $flag
     * @return Dispatcher
     */
    public function returnResponse($flag = NULL)
    {

    }

    /**
     * setDefaultAction
     * @description Set Default Action
     * @param string $action
     * @return Dispatcher
     */
    public function setDefaultAction(string $action)
    {

    }

    /**
     * setDefaultController
     * @description Set Default Controller
     * @param string $controller
     * @return Dispatcher
     */
    public function setDefaultController($controller)
    {

    }

    /**
     * setDefaultModule
     * @description Set Default Module
     * @param string $module
     * @return Dispatcher
     */
    public function setDefaultModule(string $module)
    {

    }

    /**
     * setErrorHandler
     * @description Set Error Handler Function
     * @param callable $callback
     * @param int $error_types
     */
    public function setErrorHandler(callable $callback, $error_types = E_ALL)
    {

    }

    /**
     * setView
     * @description Set View
     * @param ViewInterface $view
     * @return Dispatcher
     */
    public function setView(ViewInterface $view)
    {

    }

    /**
     * throwException
     * @description Set Throw Exception Mode
     * @param bool|null $flag
     * @return $this|null
     */
    public function throwException($flag = NULL)
    {
        if($flag !== NULL){
            G::set('throwException', (bool)$flag);

            return $this;
        }

        return G::get('throwException');
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
