<?php

namespace atomasevic\MXLogin;

function dns_get_mx($domain, &$mxHosts, &$mxWeight)
{
    $mxHosts[0] = ProvidersUnitTest::getMxDomainMock();
    return true;
}

class ProvidersUnitTest extends \Codeception\TestCase\Test
{

    private static $mxDomainMock = null;

    public static function getMxDomainMock()
    {
        if (self::$mxDomainMock == null) {
            throw new \Exception('mx-domain mock not set');
        }
        return self::$mxDomainMock;
    }

    private function setMxDomainMock($mxDomain)
    {
        self::$mxDomainMock = $mxDomain;
    }

    /**
     * @var MXLoginUrls
     */
    private $mxLoginUrls;

    protected function _before()
    {
        $this->mxLoginUrls = new MXLoginUrls();
    }

    public function _after()
    {
        self::setMxDomainMock(null);
    }

    /**
     * @dataProvider mxDomainProvider
     *
     * @param $mxDomain
     * @param $expectedName
     * @param $expectedCode
     * @param $expectedLoginUrl
     */
    public function testGetLoginData_GivenSupportedMxDomain_ExpectsToReturnMatchingMxProvider(
        $mxDomain,
        $expectedName,
        $expectedCode,
        $expectedLoginUrl
    ) {
        $expectedLoginData = [
            'name' => $expectedName,
            'code' => $expectedCode,
            'loginUrl' => $expectedLoginUrl
        ];
        $loginData = $this->mxLoginUrls->getLoginData($mxDomain);
        $this->assertEquals($expectedLoginData, $loginData);
    }


    public function mxDomainProvider()
    {
        return [
            ['google.com', 'Gmail', 'atmx-gmail', 'https://mail.google.com'],
            ['googlemail.com', 'Gmail', 'atmx-gmail', 'https://mail.google.com'],
            ['yahoodns.net', 'Yahoo Mail', 'atmx-yahoo', 'https://mail.yahoo.com'],
            ['hotmail.com', 'Outlook', 'atmx-outlook', 'https://login.live.com'],
            ['mailinator.com', 'Mailinator', 'atmx-mailinator', 'https://www.mailinator.com'],
            ['mail.com', 'Mail.com', 'atmx-mail-com', 'https://www.mail.com'],
            ['aol.com', 'AOL', 'atmx-aol', 'http://webmail.aol.com'],
            ['t-com.hr', 'T-Com Komunikator', 'atmx-tcom-hr', 'https://komunikator.tportal.hr/komunikator/'],
            ['iskon.hr', 'Iskon', 'atmx-iskonhr', 'https://webmail.iskon.hr'],
            ['mail.ru', 'Mail.ru', 'atmx-mailru', 'https://e.mail.ru/login'],
        ];
    }

    /**
     * @dataProvider loginSearchDataProvider
     *
     * @param $email
     * @param $mxDomain
     * @param $expectedMxName
     */
    public function testMxLoginSearch_WithMockedMxDnsRecords($email, $mxDomain, $expectedMxName)
    {
        $mxLogin = new MXLogin();
        $this->setMxDomainMock($mxDomain);
        $loginData = $mxLogin->search($email);
        $this->assertEquals($expectedMxName, $loginData['name']);
    }

    public function loginSearchDataProvider()
    {
        return [
            ['some.mail@aol.com', 'aol.com', 'AOL'],
            ['some.mail@degordian.com', 'foo.google.com', 'Gmail'],
            ['some.mail@gmail.com', 'foo.bar.googlemail.com', 'Gmail'],
            ['some.mail@yahoo.com', 'foo.bar.yahoodns.net', 'Yahoo Mail'],
            ['some.mail@mail.ru', 'foo.mail.ru', 'Mail.ru'],
            ['some.mail@mail.com', 'mail.com', 'Mail.com'],
        ];
    }


    public function testGetLoginData_GivenNotSupportedMxDomain_ExpectsResultToBeNull()
    {
        $loginData = $this->mxLoginUrls->getLoginData('noooooooooo.com');
        $this->assertNull($loginData);
    }
}