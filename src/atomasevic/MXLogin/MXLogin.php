<?php

namespace atomasevic\MXLogin;

/**
* MXLogin
* Improve your registration/signup pages with links to user's email provider inbox.
* Author: Antun Tomasevic (atomasevic@gmail.com) 2016
*/

class MXLogin
{

    private $mxProviderManager = null;

    public function __construct()
    {
        if(is_null($this->mxProviderManager)){
            $this->mxProviderManager = new MXProviderManager();
        }
    }

    /**
     * Get data for email provider.
     *
     * @param $email
     * @return array|null
     * @throws \Error
     */
    public function search($email)
    {
        if(!$this->validEmail($email)){
            throw new \Error("Email is not valid.", 201);
        }
        $domain = $this->getDomain($email);
        $mxHosts = [];
        $mxWeight = [];
        dns_get_mx($domain, $mxHosts, $mxWeight);

        if(!count($mxHosts)){
            throw new \Error("Domain does not exist.", 202);
        }

        return $this->mxProviderManager->getProviderLoginData($this->extractMXDomain($mxHosts[0]));
    }

    /**
     * Just a basic check for pattern user@domain.tld
     *
     * @param $email
     * @return int
     */
    private function validEmail($email)
    {
        $validEmailPattern = '/^\S{1,}@\S{1,}[.]\S{1,}$/';
        return preg_match($validEmailPattern, $email);
    }

    /**
     * Get domain from email
     *
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
     *
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