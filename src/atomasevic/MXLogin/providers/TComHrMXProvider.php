<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for T-Com.hr
 */

use atomasevic\MXLogin\MXProviderBase;

class TComHrMXProvider extends MXProviderBase
{
    public $name = 'T-Com Komunikator';
    public $code = 'atmx-tcom-hr';
    public $loginUrl = 'https://komunikator.tportal.hr/komunikator/';
}