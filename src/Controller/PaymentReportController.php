<?php

namespace App\Controller;

use App\Service\Payments\PaymentReportGenerator;
use App\Service\Payments\ReportProviders\PayPalProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentReportController extends AbstractController
{


    #[Route('/', name: 'generateReport')]
    public function generateReport(
        Request $request,
        PaymentReportGenerator $reportGenerator
    ): Response {
        $result = $reportGenerator->generate($request->get('provider'), ['date' => '2024-12-22', 'lol' => 'kek']);

        return $this->json(['report' => $result]);
    }
}
