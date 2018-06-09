<?php
/**
 * Path Route is used for managing static URIs.
 *
 */

namespace Syx\Route;

use Syx\RequestAbstract;
use Syx\RouteInterface;

class Path implements RouteInterface
{
    /**
     * Class constructor
     *
     */
    public function __construct()
    {

    }

    /**
     * route
     * @description
     * @param RequestAbstract $request
     * @return bool
     */
    public function route(RequestAbstract $request)
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
