<?php

namespace App\ConversionStrategy\TwoDay;


use App\ConversionStrategy\ConversionStrategy;
use App\Domain\ConversionAmount;

/**
 * Class TwoDayUSDStrategy
 * @package App\ConversionStrategy\TwoDay
 */
final class TwoDayUSDStrategy implements ConversionStrategy
{
    /**
     * @param float $amount
     */
    public function conversion(float $amount): void
    {
        ConversionAmount::changeAmount($amount * 3.636);
    }

}