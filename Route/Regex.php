<?php
/**
 * Syx Route Regexp
 */

namespace Syx\Route;

use Syx\Exception\RouterFailed;

class Regex implements \Syx\RouteInterface
{
    protected $_route = '';
    protected $_default = [ ];
    protected $_maps = [ ];
    protected $_verify = NULL;

    /**
     * Regex constructor.
     * @param string $match
     * @param array $route
     * @param array $map
     * @param array|null $verify
     * @throws RouterFailed
     */
    public function __construct($match, $route, $map, $verify = NULL)
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
