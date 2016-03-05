<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Yahoo Mail
 */

use atomasevic\MXLogin\MXProviderBase;

class YahooMXProvider extends MXProviderBase
{
    private $name = 'Yahoo Mail';
    private $code = 'atmx-yahoo';
    private $loginUrl = 'http://mail.yahoo.com';

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