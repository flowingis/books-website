<?php

/**
 * prophpUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class prophpUrlMatcher extends Symfony\Components\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function match($url)
    {
        $url = $this->normalizeUrl($url);

        if (preg_match('#^/$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ProPhpBundle:Default:index',)), array('_route' => 'homepage'));
        }

        if (preg_match('#^/(?P<page>[^/\.]+?)$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ProPhpBundle:Default:page',)), array('_route' => 'page'));
        }

        return false;
    }
}
