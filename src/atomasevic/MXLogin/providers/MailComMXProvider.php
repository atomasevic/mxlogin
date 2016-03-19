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
    private $loginUrl = 'https://www.mail.com';
    private $mxDomains = [
        'mail.com'
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