<?php

namespace atomasevic\MXLogin;

class MXProviderBase
{
    /**
     * Provider name
     * @var string
     */
    public $name;

    /**
     * Provider unique code
     * @var string
     */
    public $code;

    /**
     * Provider login url
     * @var string
     */
    public $loginUrl;

    /**
     * Return provider data
     * @return array
     */
    public function getData()
    {
        return [
            'name'  => $this->name,
            'code'  => $this->code,
            'loginUrl'  => $this->loginUrl
        ];
    }

}