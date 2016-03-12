<?php

namespace atomasevic\MXLogin;


class MXProviderManager
{
    
    const MX_PROVIDERS_DIR = __DIR__ . '/providers';

    private $map = [];

    private static function scanFilesForProviderClasses()
    {
        $validProviders = [];
        $providerPattern = '/^[a-zA-Z0-9]+MXProvider\\.php/';
        $providerFiles = array_diff(scandir(self::MX_PROVIDERS_DIR), array('..', '.'));

        foreach ($providerFiles as $providerFile) {
            if(preg_match($providerPattern, $providerFile)){
                $validProviders[] = __NAMESPACE__ . '\\providers\\' . str_replace('.php', '', $providerFile);
            }
        }

        if(!count($validProviders)){
            throw new \Error("No valid provider classes found in providers folder.");
        }

        return $validProviders;
    }

    private function fillMap()
    {
        $providerClasses = self::scanFilesForProviderClasses();

        foreach ($providerClasses as $providerClass) {
            $provider = new $providerClass();
            $mxDomains = $provider->getMXDomains();

            foreach ($mxDomains as $mxDomain) {
                $this->map[$mxDomain] = $provider;
            }
        }
    }

    public function __construct()
    {
        $this->fillMap();
    }

    public function getProviderLoginData($mxDomain)
    {
        if(isset($this->map[$mxDomain])){
            return $this->map[$mxDomain]->getData();
        } else {
            return null;
        }
    }

}