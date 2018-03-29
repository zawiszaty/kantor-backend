<?php

namespace App\CommandHandler;


use App\Command\ConversionCommand;
use App\DayStrategy\FirstDayStrategy;
use App\DayStrategy\TwoDayStrategy;

/**
 * Class ConversionHandler
 * @package App\CommandHandler
 */
final class ConversionHandler
{
    public function handle(ConversionCommand $conversionCommand)
    {
        switch ($conversionCommand->getDate()) {
            case 1:
                $strategy = new FirstDayStrategy();
                return $strategy->select($conversionCommand->getCurrency(), $conversionCommand->getAmount());
                break;
            case 2:
                $strategy = new TwoDayStrategy();
                return $strategy->select($conversionCommand->getCurrency(), $conversionCommand->getAmount());
                break;
        }

    }

}