<?php

/**
 * prophpUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class prophpUrlGenerator extends Symfony\Components\Routing\Generator\UrlGenerator
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function generate($name, array $parameters, $absolute = false)
    {
        if (!method_exists($this, $method = 'get'.$name.'RouteInfo')) {
            throw new \InvalidArgumentException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = $this->$method();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    protected function gethomepageRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'ProPhpBundle:Default:index',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),));
    }

    protected function getpageRouteInfo()
    {
        return array(array (  'page' => ':page',), array_merge($this->defaults, array (  '_controller' => 'ProPhpBundle:Default:page',)), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => ':page',    3 => 'page',  ),));
    }
}
