<?php

namespace App\ConversionStrategy\FirstDay;


use App\ConversionStrategy\ConversionStrategy;
use App\Domain\ConversionAmount;

/**
 * Class FirstDayUSDStrategy
 * @package App\ConversionStrategy\FirstDay
 */
final class FirstDayUSDStrategy implements ConversionStrategy
{
    /**
     * @param float $amount
     */
    public function conversion(float $amount): void
    {
        ConversionAmount::changeAmount($amount * 3.516);
    }

}