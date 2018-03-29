<?php

namespace App\ConversionStrategy\TwoDay;


use App\ConversionStrategy\ConversionStrategy;
use App\Domain\ConversionAmount;

final class TwoDayGBPStrategy implements ConversionStrategy
{
    public function conversion(float $amount): void
    {
        ConversionAmount::changeAmount($amount * 4.777);
    }
}