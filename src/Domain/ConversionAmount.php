<?php

namespace App\Domain;

/**
 * Class ConversionAmount
 * @package App\Domain
 */
final class ConversionAmount
{
    /**
     * @var
     */
    public static $amount;

    /**
     * @param string $amount
     */
    public static function changeAmount(string $amount): void
    {
        self::$amount = $amount;
    }

    /**
     * @return string
     */
    public static function getAmount(): string
    {
        return self::$amount;
    }
}