<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Iskon.hr
 */

use atomasevic\MXLogin\MXProviderBase;

class IskonHrMXProvider extends MXProviderBase
{
    public $name = 'Iskon';
    public $code = 'atmx-iskonhr';
    public $loginUrl = 'https://webmail.iskon.hr';
}