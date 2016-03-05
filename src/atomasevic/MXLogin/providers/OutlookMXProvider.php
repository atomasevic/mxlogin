<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Outlook and Hotmail
 */

use atomasevic\MXLogin\MXProviderBase;

class OutlookMXProvider extends MXProviderBase
{
    private $name = 'Outlook';
    private $code = 'atmx-outlook';
    private $loginUrl = 'http://login.live.com';

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