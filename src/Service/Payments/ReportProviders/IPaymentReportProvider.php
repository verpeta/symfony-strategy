<?php

declare(strict_types=1);

namespace App\Service\Payments\ReportProviders;

interface IPaymentReportProvider
{
    public static function getProviderName(): string;
    public function generateReport(array $data): array;
}