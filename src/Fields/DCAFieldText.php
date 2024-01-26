<?php declare(strict_types=1);

namespace lindesbs\ContaoDCA\Fields;

use lindesbs\ContaoDCA\Classes\DCAFieldGeneric;
use lindesbs\ContaoDCA\Interface\DCAFieldInterface;

class DCAFieldText extends DCAFieldGeneric
{
    function init()
    {

        $this->setType('text');
        $this->setSql(['type' => 'string', 'length' => 255, 'default' => false]);
    }


}