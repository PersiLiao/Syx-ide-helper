<?php
/**
 * Syx\Router is the standard framework router.
 */
namespace Syx;

class Router
{

    /**
     * @var array Array of routes to match against
     */
    protected $_routes = [];

    /**
     * @var string|null Currently matched route
     */
    protected $_current = NULL;

    /**
     * Router constructor
     */
    public function __construct()
    {

    }

    /**
     * addRoute
     * @description Add route to the route chain
     * @param string $name
     * @param RouteInterface $route
     * @return Router
     */
    public function addRoute(string $name, RouteInterface $route)
    {

    }

    /**
     * addConfig
     * @description Add configuration to routing
     * @param array|ConfigAbstract $config
     * @return Router
     * @throws Exception\RouterFailed
     */
    public function addConfig($config)
    {

    }

    /**
     * getCurrentRoute
     * @description Retrieve a currently matched route
     * @return string|null
     */
    public function getCurrentRoute()
    {
        return $this->_current;
    }

    /**
     * getRoute
     * @description Retrieve a named route
     * @param string $name
     * @return RouteInterface|null
     */
    public function getRoute($name)
    {

    }

    /**
     * getRoutes
     * @description Retrieve an array of routes added to the route chain
     * @return array
     */
    public function getRoutes()
    {
        return $this->_routes;
    }

    /**
     * route
     * @description Find a matching route to the current Request and inject
     * @param RequestAbstract $request
     * @return bool
     */
    public function route(RequestAbstract $request)
    {

    }
}
