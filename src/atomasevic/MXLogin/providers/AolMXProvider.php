<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for AOL.com
 */

use atomasevic\MXLogin\MXProviderBase;

class AolMXProvider extends MXProviderBase
{
    public $name = 'AOL';
    public $code = 'atmx-aol';
    public $loginUrl = 'http://webmail.aol.com';
}