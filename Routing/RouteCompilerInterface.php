<?php


namespace Spirling\Interfaces\Routing;


interface RouteCompilerInterface
{

    /**
     * @param RouteInterface $route
     * @return CompiledRouteInterface
     */
    public function compile(RouteInterface $route) : CompiledRouteInterface;

}