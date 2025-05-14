<?php

namespace App\Entity\RSTReport;

enum Modulation: string
{
    case M1 = "modulacja niezrozumiała";
    case M2 = "zła modulacja";
    case M3 = "niewielka jakość modulacji";
    case M4 = "modulacja miernej jakości";
    case M5 = "dobra modulacja";

    public static function getValue(int $case): Modulation
    {
        return match ("M".$case) {
            'M1' => self::M1,
            'M2' => self::M2,
            'M3' => self::M3,
            'M4' => self::M4,
            'M5' => self::M5,
            default => throw new \InvalidArgumentException("Invalid case: $case"),
        };
    }
}
