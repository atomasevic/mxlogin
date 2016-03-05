<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for AOL.com
 */

use atomasevic\MXLogin\MXProviderBase;

class AolMXProvider extends MXProviderBase
{
    private $name = 'AOL';
    private $code = 'atmx-aol';
    private $loginUrl = 'http://webmail.aol.com';

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