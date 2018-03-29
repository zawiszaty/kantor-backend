<?php

namespace App\ConversionStrategy;


/**
 * Interface ConversionStrategy
 * @package App\ConversionStrategy
 */
interface ConversionStrategy
{
    /**
     * @param float $amount
     */
    public function conversion(float $amount): void;
}