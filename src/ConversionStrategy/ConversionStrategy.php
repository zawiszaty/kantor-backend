<?php

namespace App\ConversionStrategy;


interface ConversionStrategy
{
    public function conversion(float $amount): void;
}