<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Mail.com
 */

use atomasevic\MXLogin\MXProviderBase;

class MailComMXProvider extends MXProviderBase
{
    private $name = 'Mail.com';
    private $code = 'atmx-mail-com';
    private $loginUrl = 'http://www.mail.com';

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