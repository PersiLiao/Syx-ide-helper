<?php
/**
 * Syx Action Abstract
 */
namespace Syx;

abstract class ActionAbstract extends ControllerAbstract
{
    /**
     * @var ControllerAbstract
     */
    protected $_controller = NULL;

    /**
     * execute
     * @description execute custom handler
     * @return mixed
     */
    abstract public function execute();

    /**
     * getController
     * @description Return Controller
     * @return ControllerAbstract
     */
    public function getController()
    {
        return $this->_controller;
    }
}
