<?php

namespace App\Entity\RSTReport;

enum Strength: string
{
    case S1 = "bardzo słaby";
    case S2 = "bardzo słaby, ale czytelny";
    case S3 = "słaby";
    case S4 = "dostatecznie dobry";
    case S5 = "dość dobry";
    case S6 = "dobry";
    case S7 = "umiarkowanie silny";
    case S8 = "silny";
    case S9 = "bardzo silny";

    public static function getValue(int $case): Strength
    {
        return match ("S".$case) {
            'S1' => self::S1,
            'S2' => self::S2,
            'S3' => self::S3,
            'S4' => self::S4,
            'S5' => self::S5,
            'S6' => self::S6,
            'S7' => self::S7,
            'S8' => self::S8,
            'S9' => self::S9,
            default => throw new \InvalidArgumentException("Invalid case: $case"),
        };
    }
}
