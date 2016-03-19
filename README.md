# MXLogin
[![Latest Stable Version](https://poser.pugx.org/atomasevic/mxlogin/v/stable)](https://packagist.org/packages/atomasevic/mxlogin) [![Total Downloads](https://poser.pugx.org/atomasevic/mxlogin/downloads)](https://packagist.org/packages/atomasevic/mxlogin) [![Latest Unstable Version](https://poser.pugx.org/atomasevic/mxlogin/v/unstable)](https://packagist.org/packages/atomasevic/mxlogin) [![License](https://poser.pugx.org/atomasevic/mxlogin/license)](https://packagist.org/packages/atomasevic/mxlogin)
Improve your registration/signup pages with links to user's email provider inbox. <br />
Don't just tell users to check their Gmail - give them a link. 

<img src="http://i.imgur.com/5QZKwp9.png?1" width="360" height="360" />

# How does it work?
MXLogin is checking MX records for the given email address and maps them to one of supported email providers. <br />
This way it can recognize your organization is using Google Mail even if your email address doesn't end with gmail.com. </br />
Besides login urls, you can make sure your users didn't do a typo (gimail.com instead of gmail.com) by [catching errors](#throw-new).

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

[Need more?](#contribute)

# How to install (Composer)

    composer require atomasevic/mxlogin
    
or add to your project's composer.json

    "require": {
        "atomasevic/mxlogin": "~1.0.0"
    }

# How to use

```php
    <?php
    use atomasevic\MXLogin\MXLogin;

    $email = 'somebody@gmail.com';

    $mxLogin = new MXLogin();
    $loginData = $mxLogin->search($email);
```

Search method returns array if it has provider for the given email address:

```php
    print_r($loginData);
    Array ( 
        [name] => Gmail 
        [code] => atmx-gmail 
        [loginUrl] => https://mail.google.com 
    )
```
    
If there is no match in our providers, it returns `null`.

# Throw new

There are few errors thrown by MXLogin you'll need to catch in your application.

#### No valid provider classes found in providers folder. (code = 101)
This error is thrown when MXProviderManager can't find any valid MXProvider class inside providers dir. <br />
This should never happen, unless you delete or rename everything in providers dir.

#### Email format is not valid. (code = 201)
This error is thrown when you pass invalid string to search(). It doesn't do anything smarter than check if <br />
format is user@domain.tld`. It doesn't check mail servers for valid recipient.

#### Email domain does not exist. (code = 202)
This error is thrown when email domain doesn't resolve to any mxHosts. You could catch user typos with this error. <br />
    
# Contribute

Contribution is more than welcome :) <br />
Fork it, make it better, run tests (`codecept run`) and create pull request.

# Questions, problems?

Please open issue, I'll do my best to answer ASAP.

# This repo is better because of this people :heart:

Thank you... <br />
Marko Kruljac (@krukru) <br />
Slaven Vincetic (@slaven-ii) <br />
Tony Mrakovcic (@tonymrakovcic) <br />

# License
[MIT License](LICENSE)