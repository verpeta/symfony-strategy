<?php

declare(strict_types=1);

namespace App\Service\Payments\ReportProviders;

class PayPalProvider implements IPaymentReportProvider
{
    public const PROVIDER_NAME = 'paypal';


    public static function getProviderName(): string
    {
        return static::PROVIDER_NAME;
    }

    public function generateReport(array $data): array
    {
        return [static::PROVIDER_NAME, 'report', 'data'];
    }
}