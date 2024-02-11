<?php

namespace App;

use App\DependencyInjection\Compiler\GameEventsPass;
use App\Service\Payments\ReportProviders\IGameEvent;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
