<?php

namespace App\Domain;

class ConversionAmount
{
    public static $amount;

    public static function changeAmount(string $amount)
    {
        self::$amount = $amount;
    }

    public static function getAmount(): string
    {
        return self::$amount;
    }
}