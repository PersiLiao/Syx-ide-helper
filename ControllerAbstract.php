<?php
/**
 * Syx Controller Abstract
 */
namespace Syx;

abstract class ControllerAbstract
{
    /**
     * @var array Action List
     */
    public $actions = [ ];

    /**
     * @var string Current Module
     */
    protected $_module;

    /**
     * @var Request\Http|RequestAbstract RequestAbstract object wrapping the request environment
     */
    protected $_request = NULL;

    /**
     * @var Response\Http|ResponseAbstract ResponseAbstract object wrapping the response
     */
    protected $_response = NULL;

    /**
     * Array of arguments provided to the constructor, minus the
     * {@link $_request Request object}.
     *
     * @var array
     */
    protected $_invokeArgs = [ ];

    /**
     * @var View\Simple|ViewInterface View object
     */
    protected $_view = NULL;

    /**
     * Class constructor
     * The request and response objects should be registered with the
     * controller, as should be any additional optional arguments; these will be
     * available via {@link getRequest()}, {@link getResponse()}, and
     * {@link getInvokeArgs()}, respectively.
     *
     * @param RequestAbstract $request
     * @param ResponseAbstract $response
     * @param ViewInterface $view
     * @param array $invokeArgs Any additional invocation arguments
     * @return void
     */
    final public function __construct(RequestAbstract $request, ResponseAbstract $response, ViewInterface $view, array $invokeArgs = [ ])
    {

    }

    /**
     * Render a view
     * Renders a view. By default, views are found in the view script path as
     * <controller>/<action>.phtml. You may change the script suffix by
     * resetting {@link $viewSuffix}.
     *
     * @see ResponseAbstract::appendBody()
     * @param  string|null $tpl Defaults to action registered in request object
     * @param  array $parameters add those variables to the view
     * @return void
     */
    protected function display($tpl = NULL, $parameters = [ ])
    {

    }

    /**
     * Forward to another controller/action.
     * It is important to supply the unformatted names, i.e. "article"
     * rather than "ArticleController".  The dispatcher will do the
     * appropriate formatting when the request is received.
     * If only an action name is provided, forwards to that action in this
     * controller.
     * If an action and controller are specified, forwards to that action and
     * controller in this module.
     * Specifying an action, controller, and module is the most specific way to
     * forward.
     * A fourth argument, $params, will be used to set the request parameters.
     * If either the controller or module are unnecessary for forwarding,
     * simply pass null values for them before specifying the parameters.
     *
     * @todo this should be checked again within a test
     * @param string $action
     * @param string $controller
     * @param string $module
     * @param array $args
     * @return void
     */
    public function forward($module, $controller = NULL, $action = NULL, array $args = [ ])
    {

    }


    /**
     * getInvokeArg
     * @description Return a single invocation argument
     * @param string $key
     * @return mixed
     */
    public function getInvokeArg($key)
    {

    }

    /**
     * getInvokeArgs
     * @description Return the array of constructor arguments (minus the Request object)
     * @return array
     */
    public function getInvokeArgs()
    {

    }

    /**
     * getModuleName
     * @description Return the current module name
     * @return string
     */
    public function getModuleName()
    {

    }

    /**
     * getRequest
     * @description Return the Request object
     * @return Request\Http|RequestAbstract
     */
    public function getRequest()
    {

    }

    /**
     * getResponse
     * @description Return the Response object
     * @return Response\Http|ResponseAbstract
     */
    public function getResponse()
    {

    }

    /**
     * getView
     * @description Return the View object
     * @return View\Simple|ViewInterface
     */
    public function getView()
    {

    }

    /**
     * getViewpath
     * @description Return the script path
     * @return array|null|string
     */
    public function getViewpath()
    {

    }

    /**
     * init
     * Called from {@link __construct()} as final step of object instantiation
     * @description Initialize object
     * @return void
     */
    public function init()
    {

    }

    /**
     * Render a view
     * Renders a view. By default, views are found in the view script path as
     * <controller>/<action>.phtml. You may change the script suffix by
     * resetting {@link $viewSuffix}.
     *
     * @see Syx\ResponseAbstract::appendBody()
     * @param  string|null $tpl Defaults to action registered in request object
     * @param  array $parameters add those variables to the view
     * @return void
     */
    protected function render($tpl = NULL, array $parameters = [ ])
    {

    }

    /**
     * redirect
     * @description Redirect to another URL
     * @param string $url
     * @return void
     */
    public function redirect($url)
    {

    }

    /**
     * setViewpath
     * @description Set Script Path
     * @param string $templateDir
     */
    public function setViewpath($templateDir)
    {

    }

    final private function __clone()
    {

    }
}
