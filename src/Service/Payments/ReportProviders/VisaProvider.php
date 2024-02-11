<?php

declare(strict_types=1);

namespace App\Service\Payments\ReportProviders;

class VisaProvider implements IPaymentReportProvider
{
    public const PROVIDER_NAME = 'visa';


    public static function getProviderName(): string
    {
        return static::PROVIDER_NAME;
    }

    public function generateReport(array $data): array
    {
        return [static::PROVIDER_NAME, 'report', 'data'];
    }
}