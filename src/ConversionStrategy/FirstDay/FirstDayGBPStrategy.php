<?php

namespace App\ConversionStrategy\FirstDay;


use App\ConversionStrategy\ConversionStrategy;
use App\Domain\ConversionAmount;

final class FirstDayGBPStrategy implements ConversionStrategy
{
    public function conversion(float $amount): void
    {
        ConversionAmount::changeAmount($amount * 4.647);
    }
}