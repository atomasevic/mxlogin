<?php
namespace atomasevic\MXLogin\providers;

/**
 * MX Provider for Mail.ru
 */

use atomasevic\MXLogin\MXProviderBase;

class MailRuMXProvider extends MXProviderBase
{
    public $name = 'Mail.ru';
    public $code = 'atmx-mailru';
    public $loginUrl = 'http://e.mail.ru/login';
}