<?php declare(strict_types=1);

namespace lindesbs\ContaoDCA;

use lindesbs\ContaoDCA\Classes\DCAFieldGeneric;
use lindesbs\ContaoDCA\Fields\DCAFieldText;

class DCA
{
    private static string $strDCANeme;

    /**
     * @param string $strDCANeme
     */
    public static function DCABuilder(string $strDCANeme): static
    {
        self::$strDCANeme = $strDCANeme;

        return new static();
    }


    public function addField(string $alias, DCAFieldGeneric $dca=null): DCA
    {
        $alias = strtolower($alias);

        if (!$dca)
        {
            $dca = new DCAFieldText();
        }

        $GLOBALS['TL_DCA'][self::$strDCANeme]['palettes']['default'] .= sprintf(";%s", $alias);

        $GLOBALS['TL_DCA'][self::$strDCANeme]['fields'][$alias] = $dca->render($alias);
        return $this;

    }

}
