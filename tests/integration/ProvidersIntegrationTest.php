<?php

namespace atomasevic\MXLogin;


class ProvidersIntegrationTest extends \Codeception\TestCase\Test
{

    /**
     * @dataProvider loginSearchDataProvider
     *
     * @param $email
     * @param $expectedMxName
     */
    public function testMxLoginSearch_WithMockedMxDnsRecords($email, $expectedMxName)
    {
        $mxLogin = new MXLogin();
        $loginData = $mxLogin->search($email);
        $this->assertEquals($expectedMxName, $loginData['name']);
    }

    public function loginSearchDataProvider()
    {
        return [
            ['some.mail@aol.com', 'AOL'],
            ['some.mail@degordian.com', 'Gmail'],
            ['some.mail@gmail.com', 'Gmail'],
            ['some.mail@yahoo.com', 'Yahoo Mail'],
            ['some.mail@mail.ru', 'Mail.ru'],
            ['some.mail@mail.com', 'Mail.com'],
            ['some.mail@iskon.hr', 'Iskon'],
            ['some.mail@mailinator.com', 'Mailinator'],
            ['some.mail@mail.ru', 'Mail.ru'],
            ['some.mail@hotmail.com', 'Outlook'],
            ['some.mail@t-com.hr', 'T-Com Komunikator'],
        ];
    }


}