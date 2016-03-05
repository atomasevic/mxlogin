<?php

namespace atomasevic\MXLogin;

abstract class MXProviderBase
{

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
    abstract public function getMXDomains();

    /**
     * Provider name
     *
     * @return string
     */
    abstract public function getName();

    /**
     * Provider unique code
     *
     * @return string
     */
    abstract public function getCode();

    /**
     * Provider login url
     *
     * @return string
     */
    abstract public function getLoginUrl();

    /**
     * Return provider data
     *
     * @return array
     */
    public function getData()
    {
        return [
            'name'  => $this->getName(),
            'code'  => $this->getCode(),
            'loginUrl'  => $this->getLoginUrl()
        ];
    }

}