<?php

namespace App\Entity\RSTReport;

enum Readability: string
{
    case R1 = "nieczytelny";
    case R2 = "ledwie czytelny";
    case R3 = "czytelny z dużymi trudnościami";
    case R4 = "czytelny z niewielkimi trudnościami";
    case R5 = "czytelny";

    public static function getValue(int $case): Readability
    {
        return match ("R".$case) {
            'R1' => self::R1,
            'R2' => self::R2,
            'R3' => self::R3,
            'R4' => self::R4,
            'R5' => self::R5,
            default => throw new \InvalidArgumentException("Invalid case: $case"),
        };
    }
}
