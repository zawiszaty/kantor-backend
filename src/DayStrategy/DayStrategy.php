<?php

namespace App\DayStrategy;


/**
 * Interface DayStrategy
 * @package App\DayStrategy
 */
interface DayStrategy
{
    /**
     * @param string $currency
     * @param float $amount
     */
    public function select(string $currency, float $amount): void;
}