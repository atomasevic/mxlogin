<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Mailinator.com
 */

use atomasevic\MXLogin\MXProviderBase;

class MailinatorMXProvider extends MXProviderBase
{
    private $name = 'Mailinator';
    private $code = 'atmx-mailinator';
    private $loginUrl = 'http://www.mailinator.com';

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