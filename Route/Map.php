<?php
/**
 * Syx Route Map for hash based ajax URL
 */

namespace Syx\Route;

use Syx\Exception\RouterFailed;
use Syx\RequestAbstract;

class Map implements \Syx\RouteInterface
{
    protected $_ctlPrefer = FALSE;
    protected $_delimiter = '';

    /**
     * Map constructor.
     * @param bool $controller_prefer
     * @param string $delimiter
     */
    public function __construct($controller_prefer = FALSE, $delimiter = '#!')
    {

    }

    /**
     * getInstance
     * @description used to create routes on the fly from config
     * @param array $config
     * @return Map
     */
    public static function getInstance(array $config)
    {
        $controllerPrefer = FALSE;
        if(isset($config['controllerPrefer']) && is_bool($config['controllerPrefer'])
        ){
            $controllerPrefer = $config['controllerPrefer'];
        }
        $delimiter = '#!';
        if(isset($config['delimiter'])){
            $delimiter = $config['delimiter'];
        }

        return new self($controllerPrefer, $delimiter);
    }


    /**
     * route
     * @description Processes a request and sets its controller and action.  If no route was possible, default route is set
     * @param RequestAbstract $request
     * @return RequestAbstract|bool
     * @throws RouterFailed
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
