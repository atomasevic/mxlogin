<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Net.hr
 */

use atomasevic\MXLogin\MXProviderBase;

class NetHrMXProvider extends MXProviderBase
{
    private $name = 'Net.hr';
    private $code = 'atmx-nethr';
    private $loginUrl = 'http://user.net.hr/';

    /**
     * Provider name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Provider unique code
     *
     * @return string
     */

    public function getCode()
    {
        return $this->code;
    }

    /**
     * Provider login url
     *
     * @return string
     */
    public function getLoginUrl()
    {
        return $this->loginUrl;
    }
}