<?php declare(strict_types=1);

namespace lindesbs\ContaoDCA\Fields;

use lindesbs\ContaoDCA\Classes\DCAFieldGeneric;
use lindesbs\ContaoDCA\Interface\DCAFieldInterface;

class DCAFieldCheckbox extends DCAFieldGeneric
{
    function init()
    {
        $this->setType('checkbox');
        $this->setSql(['type' => 'boolean', 'default' => false]);
    }


}