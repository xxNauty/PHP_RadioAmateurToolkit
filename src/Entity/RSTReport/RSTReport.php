<?php

namespace App\Entity\RSTReport;

//todo: problem z wyświetlaniem polskich znaków

class RSTReport
{
    public ?Readability $readability = null;
    public ?Strength $strength = null;
    public ?Tone $tone = null;
    public ?Modulation $modulation = null;

    public function __construct(
        int $readabilityCode,
        int $strengthCode,
        ?int $toneCode = null,
        ?int $modulationCode = null
    )
    {
        $this->readability = Readability::getValue($readabilityCode);
        $this->strength = Strength::getValue($strengthCode);
        $this->tone = $toneCode ? Tone::getValue($toneCode) : null;
        $this->modulation = $modulationCode ? Modulation::getValue($modulationCode) : null;
    }

    public function getCode(): string
    {
        $readabilityCode = substr($this->readability->name, 1);
        $strengthCode = substr($this->strength->name, 1);
        $toneCode = $this->tone ? substr($this->tone->name, 1) : '';
        $modulationCode = $this->modulation ? substr($this->modulation->name, 1) : '';

        return "$readabilityCode$strengthCode$toneCode$modulationCode";
    }

    public function getDescription(): string
    {
        $readabilityDescription = $this->readability->value;
        $strengthDescription = $this->strength->value;
        $toneDescription = $this->tone ? $this->tone->value : '';
        $modulationDescription = $this->modulation ? $this->modulation->value : '';

        return "$readabilityDescription, $strengthDescription, $toneDescription, $modulationDescription";
    }
}