<?php

declare(strict_types=1);

namespace lindesbs\ContaoDCA\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use lindesbs\ContaoDCA\ContaoDCABundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoDCABundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
