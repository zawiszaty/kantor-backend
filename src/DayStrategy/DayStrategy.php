<?php

namespace App\DayStrategy;


interface DayStrategy
{
    public function select(string $currency, float $amount): void;
}