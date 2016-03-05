<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Mail.ru
 */

use atomasevic\MXLogin\MXProviderBase;

class MailRuMXProvider extends MXProviderBase
{
    private $name = 'Mail.ru';
    private $code = 'atmx-mailru';
    private $loginUrl = 'http://e.mail.ru/login';

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