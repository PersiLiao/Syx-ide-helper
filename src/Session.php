<?php
/**
 * Syx Session
 */

namespace Syx;

class Session implements \Iterator, \ArrayAccess, \Countable
{
    /**
     * @var \Syx\Session instance
     */
    protected static $_instance;

    /**
     * @var array holds the session data
     */
    public $session;

    /**
     * @var bool whether the session was already started or not
     */
    public $started = FALSE;

    protected function __construct()
    {

    }

    /**
     * getInstance
     * @description Retrieve singleton instance
     * @return Session
     */
    public static function getInstance()
    {
        return self::$_instance;
    }

    /**
     * start
     * @description Starts the session
     */
    public static function start()
    {

    }

    /**
     * get
     * @description Get Session
     * @param null|string $name
     * @return mixed
     */
    public function get($name = NULL)
    {

    }

    /**
     * set
     * @description Set Session
     * @param string $name
     * @param mixed $value
     */
    public function set($name, $value)
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
     * del
     * @description Delete Session
     * @param string $name
     */
    public function del($name)
    {

    }

    /**
     * clear
     * @description Clear all session
     * @return bool
     */
    public function clear()
    {

    }

    public function __destruct()
    {

    }

    /**
     * __get
     * @description Magic function so that $obj->value will work.
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {

    }

    /**
     * __set
     * @description Allow setting of a session variable.
     * @param string $name
     * @param mixed $value
     * @throws Exception
     * @return void
     */
    public function __set($name, $value)
    {

    }

    /**
     * has
     * @description Detect presence
     * @param string $name
     * @return bool
     */
    public function has($name)
    {

    }

    /**
     * __isset
     * @description
     * @param $name
     * @return bool
     */
    public function __isset($name)
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
     * offsetExists
     * @description
     * @param mixed $name
     * @return bool
     */
    public function offsetExists($name)
    {

    }

    /**
     * offsetGet
     * @description Return a session value specified by name
     * @param mixed $name
     * @return mixed
     */
    public function offsetGet($name)
    {

    }

    /**
     * offsetSet
     * @description
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
     * rewind
     * @description Defined by Iterator interface
     */
    public function rewind()
    {

    }

    /**
     * __unset
     * @description
     * @param string $name
     */
    public function __unset($name)
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

    private function __clone()
    {

    }

    private function __sleep()
    {

    }

    private function __wakeup()
    {

    }
}
