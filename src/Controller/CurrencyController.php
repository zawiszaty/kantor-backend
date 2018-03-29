<?php

namespace App\Controller;

use App\Command\ConversionCommand;
use App\Domain\ConversionAmount;
use App\Form\ConversionType;
use FOS\RestBundle\Controller\FOSRestController;
use League\Tactician\CommandBus;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CurrencyController
 * @package App\Controller
 */
final class CurrencyController extends FOSRestController
{
    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * CurrencyController constructor.
     * @param CommandBus $commandBus
     */
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @Route("/api/conversion", name="conversionAction", methods={"POST"})
     *
     * @param Request $request
     * @return Response
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
            $data['currency'],
            $data['date']
        );

        $form = $this->createForm(ConversionType::class, $conversionCommand);
        $form->submit($data);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->commandBus->handle($conversionCommand);

            return new JsonResponse(ConversionAmount::getAmount(), 200);
        }

        return new JsonResponse($form->getErrors(), 500);

    }
}