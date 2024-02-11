<?php

declare(strict_types=1);

namespace App\Service\Payments;

use App\Service\Payments\ReportProviders\IPaymentReportProvider;
use InvalidArgumentException;
use Traversable;

class PaymentReportGenerator
{

    /**
     * @var IPaymentReportProvider[]
     */
    protected array $providers = [];

    public function __construct(iterable $providers)
    {
        $providers = $providers instanceof Traversable ? iterator_to_array($providers) : $providers;

        $this->providers = $providers;
    }

    public function generate(string $paymentProviderName, array $reportOptions):array
    {
        return $this->findPaymentProvider($paymentProviderName)->generateReport($reportOptions);
    }

    private function findPaymentProvider(string $paymentProviderName): IPaymentReportProvider
    {
        if (!isset($this->providers[$paymentProviderName])) {
            throw new InvalidArgumentException(sprintf(' Payment provider for "%s" not found', $paymentProviderName));
        }
        return $this->providers[$paymentProviderName];
    }
}