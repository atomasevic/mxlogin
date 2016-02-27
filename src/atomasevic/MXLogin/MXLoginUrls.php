<?php

namespace atomasevic\MXLogin;

class MXLoginUrls
{

    /**
     * Resolve MX domain to email provider class
     * @var array
     */
    private $mxResolve = [
        'google.com'        => 'GmailMXProvider',
        'googlemail.com'    => 'GmailMXProvider',
        'yahoodns.com'      => 'YahooMXProvider',
        'hotmail.com'       => 'OutlookMXProvider',
        'mailinator.com'    => 'MailinatorMXProvider',
        'mail.com'          => 'MailComMXProvider',
        'aol.com'           => 'AolMXProvider',
        't-com.hr'          => 'TComHrMXProvider',
        'iskon.hr'          => 'IskonHrMXProvider',
        'mail.ru'           => 'MailRuMXProvider'
    ];

    /**
     * Resolve mxDomain to MXProvider
     * and return MXProvider data.
     * @param $mxDomain
     * @return array|null
     */
    public function getLoginData($mxDomain)
    {
        if(!empty($this->mxResolve[$mxDomain])){
            $providerClass = $this->mxResolve[$mxDomain];
            $provider = new $providerClass();
            return $provider->getData();
        } else {
            return null;
        }
    }

}