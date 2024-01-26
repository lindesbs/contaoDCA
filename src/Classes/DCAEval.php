<?php declare(strict_types=1);

namespace lindesbs\ContaoDCA\Classes;

class DCAEval
{
    const FEGROUP_PERSONAL = "personal";
    const FEGROUP_ADDRESS = "address";
    const FEGROUP_CONTACT = "contact";
    const FEGROUP_LOGIN = "login";

    private bool $addWizardClass;
    private bool $allowHtml;
    private bool $alwaysSave;
    private string $blankOptionLabel;
    private bool $chosen;
    private bool $feEditable;
    private string $feGroup;
    private bool $feViewable;

    /**
     * @param bool $addWizardClass
     * @param bool $allowHtml
     * @param bool $alwaysSave
     * @param string $blankOptionLabel
     * @param bool $chosen
     * @param bool $feEditable
     * @param string $feGroup
     * @param bool $feViewable
     */
    public function __construct(bool $addWizardClass=false,
                                bool $allowHtml=false,
                                bool $alwaysSave=false,
                                string $blankOptionLabel='',
                                bool $chosen=false,
                                bool $feEditable=false,
                                string $feGroup=self::FEGROUP_ADDRESS,
                                bool $feViewable=false)
    {
        $this->addWizardClass = $addWizardClass;
        $this->allowHtml = $allowHtml;
        $this->alwaysSave = $alwaysSave;
        $this->blankOptionLabel = $blankOptionLabel;
        $this->chosen = $chosen;
        $this->feEditable = $feEditable;
        $this->feGroup = $feGroup;
        $this->feViewable = $feViewable;
    }


    public function render(): array
    {
        $arrReturn = [];

        if ($this->feViewable)
            $arrReturn['feViewable'] = true;
        if ($this->feEditable)
            $arrReturn['feEditable'] = true;

        return $arrReturn;

    }

}