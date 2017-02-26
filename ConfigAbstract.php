<?php
/**
 * Syx Config Abstract
 */
namespace Syx;

abstract class ConfigAbstract
{

    /**
     * @var array config
     */
    protected $_config = [];

    /**
     * @var bool Whether the config is  readonly and cannot be changed/modified
     */
    protected $_readonly = FALSE;

    /**
     * get
     * @description Get
     * @param string $name
     * @return mixed
     */
    abstract public function get($name);

    /**
     * set
     * @description Set
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    abstract public function set($name, $value);

    /**
     * readonly
     * @description Return Readonly value
     * @return bool
     */
    public function readonly()
    {

    }

    /**
     * toArray
     * @description Return an associative array of the stored data
     * @return mixed
     */
    abstract public function toArray();
}
