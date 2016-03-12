<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Mailinator.com
 */

use atomasevic\MXLogin\MXProviderBase;

class MailinatorMXProvider extends MXProviderBase
{
    public $name = 'Mailinator';
    public $code = 'atmx-mailinator';
    public $loginUrl = 'https://www.mailinator.com';
}