# MXLogin
Improve your registration/signup pages with links to user's email provider inbox.


<img src="http://i.imgur.com/5QZKwp9.png?1" width="360" height="360" />

# Supported email providers
* Gmail
* Yahoo
* Hotmail
* Outlook
* AOL
* Mail.com
* Mail.ru
* Mailinator
* T-Com.hr
* Iskon.hr

# How to install (composer)

    composer require atomasevic/mxlogin

# How to use

    <?php
    use atomasevic\MXLogin\MXLogin;

    $email = 'somebody@gmail.com';

    $mxLogin = new MXLogin();
    $loginData = $mxLogin->search($email);

