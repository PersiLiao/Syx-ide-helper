<?php
/**
 * Syx Route Simple
 */

namespace Syx\Route;

use Syx\Exception\TypeError;

class Simple implements \Syx\RouteInterface
{
    protected $_module = NULL;
    protected $_controller = NULL;
    protected $_action = NULL;

    /**
     * Class constructor
     *
     * @param string $module
     * @param string $controller
     * @param string $action
     * @throws TypeError
     */
    public function __construct($module, $controller, $action)
    {

    }

    /**
     * route
     * @description
     * @param \Syx\RequestAbstract $request
     * @return bool
     */
    public function route(\Syx\RequestAbstract $request)
    {

    }

    /**
     * assemble
     * @description Assemble a url
     * @param array $param
     * @param array $query
     * @return string
     */
    public function assemble(array $param, array $query)
    {

    }
}
