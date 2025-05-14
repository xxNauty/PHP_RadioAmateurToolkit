<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\RSTReport\RSTReport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test')]
    public function index(): Response
    {
        $rstReport = new RSTReport(5, 9, 9);

        $data = [
            'code' => $rstReport->getCode(),
            'description' => $rstReport->getDescription(),
        ];

        return $this->json($data);
    }
}
