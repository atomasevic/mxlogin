<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Net.hr
 */

use atomasevic\MXLogin\MXProviderBase;

class NetHrMXProvider extends MXProviderBase
{
    public $name = 'Net.hr';
    public $code = 'atmx-nethr';
    public $loginUrl = 'http://user.net.hr/';
}