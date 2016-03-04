<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Gmail.com
 */

use atomasevic\MXLogin\MXProviderBase;

class GmailMXProvider extends MXProviderBase
{
    public $name = 'Gmail';
    public $code = 'atmx-gmail';
    public $loginUrl = 'https://mail.google.com';
}