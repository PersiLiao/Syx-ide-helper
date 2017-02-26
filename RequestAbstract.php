<?php
/**
 * Handle request object ...
 */

namespace Syx;

abstract class RequestAbstract
{

    /**
     * @var string Current Module
     */
    public $module = '';

    /**
     * @var string Current Controller
     */
    public $controller;

    /**
     * @var string Current Action
     */
    public $action;

    /**
     * @var string Current Method
     */
    public $method;

    /**
     * @var bool Has the action been dispatched?
     */
    protected $dispatched = FALSE;

    /**
     * @var array Request parameters
     */
    protected $params = [ ];

    /**
     * @var string Current Language
     */
    protected $language;

    /**
     * @var bool is routed
     */
    protected $routed;

    /**
     * @var string base_uri
     */
    protected $_baseUri;

    /**
     * @var \Exception
     */
    protected $_exception;

    /**
     * @description Retrieve the action name
     * @return string
     */
    public function getActionName()
    {

    }

    /**
     * getBaseUri
     * @description Retrieve the action name
     * @return string
     */
    public function getBaseUri()
    {

    }

    /**
     * setBaseUri
     * @description Set base uri
     * @param string $baseUri
     */
    public function setBaseUri($baseUri)
    {

    }

    /**
     * getControllerName
     * @description Retrieve the controller name
     * @return string
     */
    public function getControllerName()
    {

    }

    /**
     * Retrieve a member of the $_ENV superglobal
     * If no $key is passed, returns the entire $_ENV array.
     *
     * @param string $name
     * @param mixed $default Default value to use if key not found
     * @return mixed Returns null if key does not exist
     */
    public function getEnv($name = NULL, $default = NULL)
    {

    }

    /**
     * getException
     * @description Retrieve Exception
     * @return \Exception
     */
    public function getException()
    {
        return $this->_exception;
    }

    /**
     * getLanguage
     * @description Retrieve the language
     * @return string
     */
    public function getLanguage()
    {

    }

    /**
     * getMethod
     * @description Retrieve the method
     * @return string
     */
    public function getMethod()
    {

    }

    /**
     * getModuleName
     * @description Retrieve the module name
     * @return string
     */
    public function getModuleName()
    {

    }

    /**
     * getParam
     * @description Get an action parameter
     * @param string $name
     * @param null|mixed $default
     * @return mixed
     */
    public function getParam($name, $default = NULL)
    {

    }

    /**
     * getParams
     * @description Get all action parameters
     * @return array
     */
    public function getParams()
    {

    }

    /**
     * getRequestUri
     * @description Retrieve the request uri
     * @return string
     */
    public function getRequestUri()
    {

    }

    /**
     * Retrieve a member of the $_SERVER superglobal
     * If no $key is passed, returns the entire $_SERVER array.
     *
     * @param string $key
     * @param mixed $default Default value to use if key not found
     * @return mixed Returns null if key does not exist
     */
    public function getServer($name = NULL, $default = NULL)
    {

    }

    /**
     * isCli
     * @description Was the request made by Cli?
     * @return bool
     */
    public function isCli()
    {

    }

    /**
     * isDispatched
     * @description Determine if the request has been dispatched
     * @return bool
     */
    public function isDispatched()
    {

    }


    /**
     * isGet
     * @description Was the request made by GET?
     * @return bool
     */
    public function isGet()
    {

    }

    /**
     * isHead
     * @description Was the request made by HEAD?
     * @return bool
     */
    public function isHead()
    {

    }

    /**
     * isOptions
     * @description Was the request made by OPTIONS?
     * @return bool
     */
    public function isOptions()
    {

    }

    /**
     * isPost
     * @description Was the request made by POST?
     * @return bool
     */
    public function isPost()
    {

    }

    /**
     * isPut
     * @description Was the request made by PUT?
     * @return bool
     */
    public function isPut()
    {

    }

    /**
     * isDelete
     * @description Was the request made by DELETE?
     * @return bool
     */
    public function isDelete()
    {

    }

    /**
     * isXmlHttpRequest
     * @description Was the request made by Javascript XMLHttpRequest?
     * @return bool
     */
    public function isXmlHttpRequest()
    {

    }

    /**
     * isRouted
     * @description Determine if the request has been routed
     * @return bool
     */
    public function isRouted()
    {

    }

    /**
     * setActionName
     * @description Set the action name
     * @param string $action
     * @return Request\Http|RequestAbstract
     * @throws Request\Exception
     */
    public function setActionName($action)
    {

    }

    /**
     * setControllerName
     * @description Set the controller name to use
     * @param string $controller
     * @return Request\Http|RequestAbstract
     * @throws Request\Exception
     */
    public function setControllerName($controller)
    {

    }

    /**
     * setDispatched
     * @description Set the dispatched
     * @param bool $dispatched
     * @return void
     */
    public function setDispatched($dispatched = TRUE)
    {

    }

    /**
     * setModuleName
     * @description Set the module name to use
     * @param string $module
     * @return Request\Http|RequestAbstract
     * @throws Request\Exception
     */
    public function setModuleName($module)
    {

    }

    /**
     * setParam
     * @description Set an action parameter
     * @param string $name
     * @param mixed|null $value
     * @return Request\Http|RequestAbstract
     */
    public function setParam($name, $value = NULL)
    {

    }

    /**
     * clearParams
     * @description Unset all user parameters
     * @return Request\Http|RequestAbstract
     */
    public function clearParams()
    {

    }

    /**
     * setRequestUri
     * @description Set the request uri to use
     * @param string|null $requestUri
     * @return Request\Http|RequestAbstract
     */
    public function setRequestUri($requestUri = NULL)
    {

    }

    /**
     * setRouted
     * @description Set flag indicating whether or not request has been dispatched
     * @param bool $flag
     * @return Request\Http|RequestAbstract
     */
    public function setRouted($flag = TRUE)
    {

    }
}
