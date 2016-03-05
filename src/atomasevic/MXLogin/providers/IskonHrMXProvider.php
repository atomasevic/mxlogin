<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Iskon.hr
 */

use atomasevic\MXLogin\MXProviderBase;

class IskonHrMXProvider extends MXProviderBase
{
    private $name = 'Iskon';
    private $code = 'atmx-iskonhr';
    private $loginUrl = 'http://webmail.iskon.hr';

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