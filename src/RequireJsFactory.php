<?php

namespace Neutron\RequireJs;


/**
 * Class RequireJsFactory
 *
 * @package Neutron\RequireJs
 */
class RequireJsFactory
{
    /**
     * @return RequireJs
     */
    public function factory()
    {
        return new RequireJs();
    }

    /**
     * @return bool
     */
    public function shouldCache()
    {
        return false;
    }
}