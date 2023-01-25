<?php

namespace App\Models;

class CountryHelper
{
    public static function getCountry($email): string
    {
        preg_match('/\.([a-z]+)/', $email, $m);
        $domainZone = $m[1] ?? null;
        if($domainZone === 'ru')
        {
            return 'russia';
        } else {
            return 'unknown';
        }
    }
}