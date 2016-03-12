<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Yahoo Mail
 */

use atomasevic\MXLogin\MXProviderBase;

class YahooMXProvider extends MXProviderBase
{
    public $name = 'Yahoo Mail';
    public $code = 'atmx-yahoo';
    public $loginUrl = 'https://mail.yahoo.com';
}