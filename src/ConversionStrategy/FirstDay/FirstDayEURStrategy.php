<?php

namespace App\ConversionStrategy\FirstDay;


use App\ConversionStrategy\ConversionStrategy;
use App\Domain\ConversionAmount;

/**
 * Class FirstDayEURStrategy
 * @package App\ConversionStrategy\FirstDay
 */
final class FirstDayEURStrategy implements ConversionStrategy
{
    /**
     * @param float $amount
     */
    public function conversion(float $amount): void
    {
        ConversionAmount::changeAmount($amount * 4.242);
    }

}