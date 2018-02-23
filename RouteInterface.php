<?php
/**
 * Syx Route Interface
 */

namespace Syx;

interface RouteInterface
{
    /**
     * route
     * @description Processes a request and sets its controller and action.  If no route was possible, default route is set
     * @param RequestAbstract $request
     * @return RequestAbstract
     */
    public function route($request);

    /**
     * assemble
     * @description Assemble a url
     * @param array $info
     * @param array $query
     * @return string
     */
    public function assemble(array $info, array $query = null);
}
