<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Gmail.com
 */

use atomasevic\MXLogin\MXProviderBase;

class GmailMXProvider extends MXProviderBase
{
    private $name = 'Gmail';
    private $code = 'atmx-gmail';
    private $loginUrl = 'http://mail.google.com';

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
     * Provider code
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