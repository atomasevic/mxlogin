<?php

namespace atomasevic\MXLogin;

    /**
     * MXLogin
     * Improve your registration/signup pages with links to user's email provider inbox.
     * Author: Antun Tomasevic (atomasevic@gmail.com) 2016
     */

/*
(MIT License)
Copyright (C) 2014 by TTRGroup
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

class MXLogin
{

    /**
     * Email to process
     * @var null
     */
    protected $email = null;

    /**
     * Instantiate object, set email
     * @param $email
     * @return self
     */
    public function __construct($email = null)
    {
       $this->setEmail($email);
    }

    /**
     * Set email for MX lookup
     * @param null $email
     */
    public function setEmail($email = null){
        $this->email = $email;
    }

    /**
     * Get data for email provider.
     * @param $email
     * @return array|null
     */
    public function search($email = null)
    {
        //Added for backwards compatibility
        $email = $email == null ? $this->email : $email;

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

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->search()['loginUrl'];
    }
}