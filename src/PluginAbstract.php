<?php
/**
 * Syx Plugin Abstract
 */

namespace Syx;

class PluginAbstract
{
    /**
     * routerStartup
     * @description This is the earliest hook in Syx plugin hook system if a custom plugin implement this method, then it will be called before routing a request
     * @runtime 这是Syx插件系统第一个hook, 在路由开始之前触发
     * @param RequestAbstract $request
     * @param ResponseAbstract $response
     */
    public function routerStartup(RequestAbstract $request, ResponseAbstract $response)
    {

    }

    /**
     * routerShutdown
     * @description This hook will be trigged after the route process finished
     * @runtime 这是Syx插件系统第二个hook, 在路由完成之后触发
     * @param RequestAbstract $request
     * @param ResponseAbstract $response
     */
    public function routerShutdown(RequestAbstract $request, ResponseAbstract $response)
    {

    }

    /**
     * dispatchLoopStartup
     * @description This hook will be trigged before dispatch loop startup
     * @runtime 这是Syx插件系统第三个hook, 在分发循环开始触发
     * @param RequestAbstract $request
     * @param ResponseAbstract $response
     */
    public function dispatchLoopStartup(RequestAbstract $request, ResponseAbstract $response)
    {

    }

    /**
     * preDispatch
     * @description If a forward occurs during a request processing, the event is triggered multiple times
     * @runtime 这是Syx插件系统第四个hook, 在分发之前触发, 如果在一个请求处理过程中, 发生了forward, 则这个事件会被触发多次
     * @param RequestAbstract $request
     * @param ResponseAbstract $response
     */
    public function preDispatch(RequestAbstract $request, ResponseAbstract $response)
    {

    }

    /**
     * postDispatch
     * @description At this point the action has been completed, and the view has been rendered. Like preDispatch, this event may also trigger multiple times
     * @runtime 这是Syx插件系统第五个hook, 分发结束之后触发, 此时动作已经执行结束, 视图(如果有)也已经渲染完成, 如果在一个请求处理过程中, 发生了forward, 则这个事件会被触发多次
     * @param RequestAbstract $request
     * @param ResponseAbstract $response
     */
    public function postDispatch(RequestAbstract $request, ResponseAbstract $response)
    {

    }

    /**
     * dispatchLoopShutdown
     * @description This is the latest hook in Syx plugin hook system, if a custom plugin implement this method, then it will be called after the dispatch loop finished
     * @runtime 这是Syx插件系统第六个hook, 分发循环结束之后触发, 此时表示所有的业务逻辑都已经运行完成, 但是响应还没有发送
     * @param RequestAbstract $request
     * @param ResponseAbstract $response
     */
    public function dispatchLoopShutdown(RequestAbstract $request, ResponseAbstract $response)
    {

    }
}
