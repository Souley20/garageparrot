<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\VoituresOccasionsRepository;
use App\Repository\HorairesRepository;

#[Route('/api/voitureOccasion', name: 'app_api_voitureOccasion_')]
class VoitureOccasionController extends AbstractController
{
    #[Route('/show/{id</+>}', name: 'show', methods: ['GET'])]
    public function show(int $id, VoituresOccasionsRepository $voituresOccasionsRepository, HorairesRepository $horairesRepository,) : Response
    {
        $horaires = $horairesRepository->findAll();
        $voitureOccasion = $voituresOccasionsRepository->find($id);

        if (!$voitureOccasion) {
            throw $this->createNotFoundException(
                'Aucune voiture trouvée pour cet id ' . $id
            );
        }
        
        return $this->render('voitureOccasion.html.twig', [
            'voitureOccasion' => $voitureOccasion,
            'horaires' => $horaires
        ]);
    }
}
