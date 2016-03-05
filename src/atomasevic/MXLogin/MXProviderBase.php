<?php

namespace atomasevic\MXLogin;

abstract class MXProviderBase
{
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