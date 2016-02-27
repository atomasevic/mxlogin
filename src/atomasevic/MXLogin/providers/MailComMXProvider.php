<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Mail.com
 */

use atomasevic\MXLogin\MXProviderBase;

class MailComMXProvider extends MXProviderBase
{
    public $name = 'Mail.com';
    public $code = 'atmx-mail-com';
    public $loginUrl = 'http://www.mail.com';
}