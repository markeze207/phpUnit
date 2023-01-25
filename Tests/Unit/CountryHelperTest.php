<?php

use App\Models\CountryHelper;
use PHPUnit\Framework\TestCase;

class CountryHelperTest extends TestCase
{

    public function testGetCountry()
    {
        $email = 'markezeafu@gmail.com';
        $expectedCountry = 'unknown';
        $this->assertEquals($expectedCountry, CountryHelper::getCountry($email));
    }
}