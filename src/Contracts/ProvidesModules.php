<?php

namespace Webleit\ZohoSignApi\Contracts;

use Webleit\ZohoSignApi\Client;

/**
 * Interface ProvidesModules
 * @package Webleit\ZohoSignApi\Contracts
 */
interface ProvidesModules
{
    /**
     * Proxy any module call to the right api call
     * @param $name
     * @return mixed
     */
    public function createModule($name);

    /**
     * Get the list of available modules
     * @return array
     */
    public function getAvailableModules();
}