<?php


namespace App\Command;


class ConversionCommand
{
    public $amount;
    public $currency;
    public $date;

    /**
     * ConversionCommand constructor.
     * @param $amount
     * @param $currency
     * @param $date
     */
    public function __construct(float $amount, string $currency, int $date)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

}