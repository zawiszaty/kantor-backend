<?php

namespace App\DayStrategy;




use App\ConversionStrategy\FirstDay\FirstDayEURStrategy;
use App\ConversionStrategy\FirstDay\FirstDayGBPStrategy;
use App\ConversionStrategy\FirstDay\FirstDayUSDStrategy;

class FirstDayStrategy implements DayStrategy
{
    public function select(string $currency, float $amount): void
    {
        switch ($currency) {
            case 'EUR':
                $strategy = new FirstDayEURStrategy();
                $strategy->conversion($amount);
                break;
            case 'USD':
                $strategy = new FirstDayUSDStrategy();
                $strategy->conversion($amount);
                break;
            case 'GBP':
                $strategy = new FirstDayGBPStrategy();
                $strategy->conversion($amount);
                break;
        }
    }

}