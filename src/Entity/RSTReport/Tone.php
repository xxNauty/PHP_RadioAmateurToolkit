<?php

namespace App\Entity\RSTReport;

enum Tone: string
{
    case T1 = "bardzo chrapliwy ton prądu zmiennego";
    case T2 = "chrapliwy ton prądu zmiennego, bez śladów muzykalności";
    case T3 = "chrapliwy, niski ton prądu zmiennego, lekko muzykalny";
    case T4 = "nieco chrapliwy ton prądu zmiennego";
    case T5 = "ton dźwięczny, modulowany składową zmienną";
    case T6 = "ton modulowany, lekko świszczący";
    case T7 = "ton prawie czysty, lekko świszczący";
    case T8 = "ton czysty";
    case T9 = "bardzo czysty, dźwięczny ton";

    public static function getValue(int $case): Tone
    {
        return match ("T".$case) {
            'T1' => self::T1,
            'T2' => self::T2,
            'T3' => self::T3,
            'T4' => self::T4,
            'T5' => self::T5,
            'T6' => self::T6,
            'T7' => self::T7,
            'T8' => self::T8,
            'T9' => self::T9,
            default => throw new \InvalidArgumentException("Invalid case: $case"),
        };
    }
}
