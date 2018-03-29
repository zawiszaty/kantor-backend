<?php

namespace App\ConversionStrategy\FirstDay;


use App\ConversionStrategy\ConversionStrategy;
use App\Domain\ConversionAmount;

/**
 * Class FirstDayGBPStrategy
 * @package App\ConversionStrategy\FirstDay
 */
final class FirstDayGBPStrategy implements ConversionStrategy
{
    /**
     * @param float $amount
     */
    public function conversion(float $amount): void
    {
        ConversionAmount::changeAmount($amount * 4.647);
    }
}