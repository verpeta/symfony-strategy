<?php

declare(strict_types=1);

namespace App\Service\Payments\ReportProviders;

class StripeProvider implements IPaymentReportProvider
{
    public const PROVIDER_NAME = 'stripe';


    public static function getProviderName(): string
    {
        return static::PROVIDER_NAME;
    }

    public function generateReport(array $data): array
    {
        return [static::PROVIDER_NAME, 'report', 'data'];
    }
}