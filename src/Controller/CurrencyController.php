<?php

namespace App\Controller;

use App\Command\ConversionCommand;
use App\Domain\ConversionAmount;
use App\Form\ConversionType;
use FOS\RestBundle\Controller\FOSRestController;
use League\Tactician\CommandBus;
use FOS\RestBundle\Controller\Annotations as Rest;
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
     * @Rest\Post("/api/conversion")
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

            $view = $this->view(ConversionAmount::getAmount(), 200);
            return $this->handleView($view);
        }

        $view = $this->view($form->getErrors(), 500);
        return $this->handleView($view);

    }
}