<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for T-Com.hr
 */

use atomasevic\MXLogin\MXProviderBase;

class TComHRMXProvider extends MXProviderBase
{
    public $name = 'T-Com Komunikator';
    public $code = 'atmx-tcom-hr';
    public $loginUrl = 'http://komunikator.tportal.hr/komunikator/';
}