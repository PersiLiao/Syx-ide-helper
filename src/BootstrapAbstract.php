<?php
/**
 * Bootstrap is a mechanism used to do some intial config
 * before a Application run.
 * User may define their own Bootstrap class by inheriting
 * \Syx\BootstrapAbstract
 * Any method declared in Bootstrap class with leading "_init",
 * will be called by Application::bootstrap()
 * one by one according to their defined order.
 */

namespace Syx;

abstract class BootstrapAbstract {
    
}
