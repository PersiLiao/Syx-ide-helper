<?php
/**
 * Syx router supervar
 *
 */

namespace Syx\Route;

use Syx\Exception\TypeError;

class Supervar implements \Syx\RouteInterface
{

    protected $_varName = '';

    /**
     * Supervar constructor.
     * @param string $supervar_name
     * @throws TypeError
     */
    public function __construct($supervar_name)
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
