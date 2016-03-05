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
        if(!empty($this->mxResolve[$mxDomain])){
            $providerClass = __NAMESPACE__ . '\\providers\\' . $this->mxResolve[$mxDomain];
            $provider = new $providerClass();
            return $provider->getData();
        } else {
            return null;
        }
    }

}