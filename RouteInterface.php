<?php
/**
 * Syx Route Interface
 */

namespace Syx;

use Syx\Request\Http;

interface RouteInterface
{
    /**
     * route
     * @description Processes a request and sets its controller and action.  If no route was possible, default route is set
     * @param RequestAbstract $request
     * @return Http|RequestAbstract
     */
    public function route(RequestAbstract $request);

    /**
     * assemble
     * @description Assemble a url
     * @param array $param
     * @param array $query
     * @return string
     */
    public function assemble(array $param, array $query);
}
