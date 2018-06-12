<?php
/**
 * Syx Route Restful
 */

namespace Syx\Route;

use Syx\Exception\TypeError;

class Restful implements \Syx\RouteInterface
{
    protected $_route = '';
    protected $_default = [];
    protected $_verify = NULL;

    /**
     * Rewrite constructor.
     * @param string $match
     * @param array $route
     * @param array|null $verify
     * @throws TypeError
     */
    public function __construct($match, $route, $verify = NULL)
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
