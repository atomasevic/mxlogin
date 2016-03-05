<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for T-Com.hr
 */

use atomasevic\MXLogin\MXProviderBase;

class TComHrMXProvider extends MXProviderBase
{
    private $name = 'T-Com Komunikator';
    private $code = 'atmx-tcom-hr';
    private $loginUrl = 'http://komunikator.tportal.hr/komunikator/';

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