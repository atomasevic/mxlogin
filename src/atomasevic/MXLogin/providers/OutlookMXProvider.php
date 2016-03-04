<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Outlook and Hotmail
 */

use atomasevic\MXLogin\MXProviderBase;

class OutlookMXProvider extends MXProviderBase
{
    public $name = 'Outlook';
    public $code = 'atmx-outlook';
    public $loginUrl = 'https://login.live.com';
}