<?php

namespace App\Tests;

use App\Entity\RSTReport\Modulation;
use App\Entity\RSTReport\Readability;
use App\Entity\RSTReport\RSTReport;
use App\Entity\RSTReport\Strength;
use App\Entity\RSTReport\Tone;
use PHPUnit\Framework\TestCase;

class RSTReportTest extends TestCase
{
    public function testConstructorAssignsValuesCorrectly(): void
    {
        $readability = Readability::getValue(5);
        $strength = Strength::getValue(9);
        $tone = Tone::getValue(3);
        $modulation = Modulation::getValue(2);

        $rstReport = new RSTReport(5, 9, 3, 2);

        $this->assertSame($readability, $rstReport->readability);
        $this->assertSame($strength, $rstReport->strength);
        $this->assertSame($tone, $rstReport->tone);
        $this->assertSame($modulation, $rstReport->modulation);
    }

    public function testGetCode(): void
    {
        $rstReport = new RSTReport(5, 9, 3, 2);

        $this->assertEquals('5932', $rstReport->getCode());
    }

    public function testGetDescription(): void
    {
        $rstReport = new RSTReport(5, 9, 3, 2);

        $this->assertEquals(
            'czytelny, bardzo silny, chrapliwy, niski ton prądu zmiennego, lekko muzykalny, zła modulacja',
            $rstReport->getDescription()
        );
    }
}
