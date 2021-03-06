<?php

namespace App\ConversionStrategy\TwoDay;


use App\ConversionStrategy\ConversionStrategy;
use App\Domain\ConversionAmount;

/**
 * Class TwoDayGBPStrategy
 * @package App\ConversionStrategy\TwoDay
 */
final class TwoDayGBPStrategy implements ConversionStrategy
{
    /**
     * @param float $amount
     */
    public function conversion(float $amount): void
    {
        ConversionAmount::changeAmount($amount * 4.777);
    }
}