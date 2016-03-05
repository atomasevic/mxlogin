<?php

namespace atomasevic\MXLogin;

class MXLoginUrls
{

    /**
     * Resolve mxDomain to MXProvider
     * and return MXProvider data.
     * @param $mxDomain
     * @return array|null
     */
    public function getLoginData($mxDomain)
    {
        $providerManager = new MXProviderManager();
        return $providerManager->getProviderLoginData($mxDomain);
    }

}