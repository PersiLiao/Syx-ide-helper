<?php
/**
 * Yaf_Request_Simple
 */
namespace Syx\Request;

use Syx\Exception\TypeError;
use Syx\RequestAbstract;

class Simple extends RequestAbstract
{

    /**
     * Simple constructor.
     * @param string|null $method
     * @param string|null $module
     * @param string|null $controller
     * @param string|null $action
     * @param array $params
     * @throws TypeError
     */
    public function __construct($method = NULL, $module = NULL, $controller = NULL, $action = NULL, $params = [ ])
    {

    }

    private function __clone()
    {

    }

}
