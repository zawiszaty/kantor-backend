<?php

namespace App\ConversionStrategy\TwoDay;


use App\ConversionStrategy\ConversionStrategy;
use App\Domain\ConversionAmount;

final class TwoDayEURStrategy implements ConversionStrategy
{
    public function conversion(float $amount): void
    {
        ConversionAmount::changeAmount($amount * 4.265);
    }

}