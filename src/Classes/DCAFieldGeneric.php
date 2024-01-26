<?php declare(strict_types=1);

namespace lindesbs\ContaoDCA\Classes;

use lindesbs\ContaoDCA\Interface\DCAFieldInterface;

abstract class DCAFieldGeneric implements DCAFieldInterface
{

    private string $type = 'text';
    private string|array $sql = "varchar(255) NOT NULL default ''";

    private string $label;
    private string $labelDescription = '';
    private bool $search;
    private bool $sorting;
    private ?DCAEval $eval;

    public function __construct(
        string $label = '',
        string $labelDescription = '',
        bool   $search = false,
        bool   $sorting = false,
        ?DCAEval $eval=null
    )
    {
        $this->label = $label;
        $this->labelDescription = $labelDescription;
        $this->search = $search;
        $this->sorting = $sorting;
        $this->eval = $eval;

        $this->init();
    }

    abstract function init();


    public function render(string $alias): array
    {
        if ($this->label === '')
            $this->label = $alias;

        return [
            'label' => [$this->label, $this->labelDescription],
            'inputType' => $this->getType(),
            'search' => $this->search,
            'eval' => $this->eval ? $this->eval->render() : [],
            'sql' => $this->getSql()
        ];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getSql(): array|string
    {
        return $this->sql;
    }

    public function setSql(array|string $sql): void
    {
        $this->sql = $sql;
    }


}