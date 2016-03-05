<?php

namespace atomasevic\MXLogin;

/**
* MXLogin
* Improve your registration/signup pages with links to user's email provider inbox.
* Author: Antun Tomasevic (atomasevic@gmail.com) 2016
*/

class MXLogin
{

    /**
     * Get data for email provider.
     * @param $email
     * @return array|null
     */
    public function search($email)
    {
        $domain = $this->getDomain($email);
        $mxHosts = [];
        $mxWeight = [];
        dns_get_mx($domain, $mxHosts, $mxWeight);
        $provider = new MXLoginUrls();

        return $provider->getLoginData($this->extractMXDomain($mxHosts[0]));
    }

    /**
     * Get domain from email
     * @param $email
     * @return string
     */
    private function getDomain($email)
    {
        $domain = substr(strchr($email, '@'), 1);
        return $domain;
    }

    /**
     * Extract top level domain from MX record
     * This domain will be used to resolve mapping
     * from domain to MXProvider class.
     * @param $mxRecord
     * @return string
     */
    private function extractMXDomain($mxRecord)
    {
        $mxParts = explode('.', $mxRecord);
        $partsCount = count($mxParts);
        return implode('.', [$mxParts[$partsCount-2], $mxParts[$partsCount-1]]);
    }

}