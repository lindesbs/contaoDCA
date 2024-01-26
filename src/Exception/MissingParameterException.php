<?php declare(strict_types=1);

namespace lindesbs\ContaoDCA\Exception;

use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;

class MissingParameterException extends NoSuchPropertyException
{

}