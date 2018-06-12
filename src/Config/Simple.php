<?php
/**
 * Syx Config Simple
 */

namespace Syx\Config;

use Syx\ConfigAbstract;

class Simple extends ConfigAbstract implements \Iterator, \ArrayAccess, \Countable
{

    /**
     * Simple constructor.
     * @description \Syx\Config\Simple provides a property based interface to an array
     * @param array $config
     * @param bool $readonly
     */
    public function __construct(array $config = [ ], $readonly = FALSE)
    {

    }

    /**
     * count
     * @description Defined by Countable interface
     * @return int
     */
    public function count()
    {

    }

    /**
     * current
     * @description Defined by Iterator interface
     * @return mixed
     */
    public function current()
    {

    }

    /**
     * __get
     * @description Magic function so that $obj->value will work
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {

    }


    /**
     * __set
     * @description Set a key of the config with value
     * @param string $name
     * @param mixed $value
     * @throws Exception
     */
    public function __set($name, $value)
    {

    }

    /**
     * __isset
     * @description
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {

    }

    /**
     * offsetExists
     * @description
     * @param string $name
     * @return bool
     */
    public function offsetExists($name)
    {

    }

    /**
     * offsetGet
     * @description
     * @param string $name
     * @return mixed
     */
    public function offsetGet($name)
    {
        return $this->__get($name);
    }

    /**
     * offsetSet
     * @description Set a key of the config with value
     * @param string $name
     * @param mixed $value
     */
    public function offsetSet($name, $value)
    {

    }

    /**
     * offsetUnset
     * @description
     * @param string $name
     */
    public function offsetUnset($name)
    {

    }

    /**
     * key
     * @description Defined by Iterator interface
     * @return mixed
     */
    public function key()
    {

    }

    /**
     * next
     * @description Defined by Iterator interface
     */
    public function next()
    {

    }

    /**
     * rewind
     * @description Defined by Iterator interface
     */
    public function rewind()
    {

    }

    /**
     * toArray
     * @description Return an associative array of the stored data
     * @return array
     */
    public function toArray()
    {

    }

    /**
     * valid
     * @description Defined by Iterator interface
     * @return bool
     */
    public function valid()
    {

    }

    /**
     * __unset
     * @description
     * @param string $name
     * @throws Exception
     */
    public function __unset($name)
    {

    }

    /**
     * get
     * @description Retrieve a value and return $default if there is no element set
     * @param string $name
     * @return bool|Simple
     */
    public function get($name)
    {

    }

    /**
     * set
     * @description Only allow setting of a property if $readonly
     * was set to true on construction. Otherwise, throw an exception
     * @param string $name
     * @param mixed $value
     * @throws Exception
     */
    public function set($name, $value)
    {

    }
}
