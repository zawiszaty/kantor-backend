<?php

namespace App\DayStrategy;


use App\ConversionStrategy\TwoDay\TwoDayEURStrategy;
use App\ConversionStrategy\TwoDay\TwoDayGBPStrategy;
use App\ConversionStrategy\TwoDay\TwoDayUSDStrategy;

class TwoDayStrategy implements DayStrategy
{
    public function select(string $currency, float $amount): void
    {
        switch ($currency) {
            case 'EUR':
                $strategy = new TwoDayEURStrategy();
                $strategy->conversion($amount);
                break;
            case 'USD':
                $strategy = new TwoDayUSDStrategy();
                $strategy->conversion($amount);
                break;
            case 'GBP':
                $strategy = new TwoDayGBPStrategy();
                $strategy->conversion($amount);
                break;
        }
    }

}