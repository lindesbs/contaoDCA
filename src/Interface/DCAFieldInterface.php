<?php

namespace lindesbs\ContaoDCA\Interface;

interface DCAFieldInterface
{

    public function render(string $alias): array;
}