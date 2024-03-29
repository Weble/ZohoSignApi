<?php

namespace Webleit\ZohoSignApi\Mixins;

use Doctrine\Common\Inflector\Inflector;

trait ProvidesModules
{
    /**
     * Proxy any module call to the right api call
     * @param $name
     * @return mixed
     */
    public function createModule($name)
    {
        if (in_array($name, array_keys($this->availableModules))) {
            $class =  $this->availableModules[$name];
            return new $class($this->client);
        }
    }

    /**
     * Get the list of available modules
     * @return array
     */
    public function getAvailableModules()
    {
        return $this->availableModules;
    }
}