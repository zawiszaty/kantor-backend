<?php


namespace App\Command;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ConversionCommand
 * @package App\Command
 */
final class ConversionCommand
{
    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Type(
     *     type="float",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    public $amount;
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(
     *     type="string",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    public $currency;
    /**
     * @var int
     * @Assert\NotBlank()
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
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
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

}