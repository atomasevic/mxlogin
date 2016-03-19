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
    private $loginUrl = 'https://komunikator.tportal.hr/komunikator/';
    private $mxDomains = [
        't-com.hr'
    ];

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

    /**
     * Array of MX domains this provider
     * will respond to.
     *
     * To get a MX domain, check MX records for domain
     * and strip everything but top level domain.
     * Sample:
     *      In your terminal:
     *      $ host -t MX gmail.com
     *
     *      gmail.com MX lookup, resolved with
     *      gmail-smtp-in.l.google.com
     *
     *      So our mxDomains property will have
     *      array(
     *          'google.com'
     *      )
     *
     * @return array
     */
    public function getMXDomains()
    {
        return $this->mxDomains;
    }
}