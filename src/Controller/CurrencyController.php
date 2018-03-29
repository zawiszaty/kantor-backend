<?php

namespace App\Controller;

use App\Command\ConversionCommand;
use App\Domain\ConversionAmount;
use League\Tactician\CommandBus;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CurrencyController
{
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @Route("/api/conversion", name="conversionAction", methods={"POST"})
     */
    public function conversionAction(Request $request): Response
    {
        $data = [
            'amount' => $request->request->get("amount"),
            'currency' => $request->request->get("currency"),
            'date' => $request->request->get("date")
        ];

        $conversionCommand = new ConversionCommand(
            $data['amount'],
            'GBP',
            2
        );

        $this->commandBus->handle($conversionCommand);

        return new JsonResponse(ConversionAmount::getAmount(), 200);
    }
}