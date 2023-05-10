<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Repository\ClassroomRepository;
use App\Repository\VoitureRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voiture')]
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }
    #[Route('/listvoiture', name: 'app_listvoiture')]
    public function listVoiture(VoitureRepository $repository )
    {
        $voiture= $repository->findAll();
        return $this->render("voiture/list.html.twig",
            array("tabVoiture"=>$voiture));
    }
    #[Route('/deletevoiture/{matricule}', name: 'app_deletevoiture')]
    public function deleteVoiture(ManagerRegistry $doctrine,VoitureRepository $repository,$matricule)
    {
        $voiture= $repository->find($matricule);
        $em=$doctrine->getManager();
        $em->remove($voiture);
        $em->flush();
        return $this->render("voiture/delete.html.twig");
    }
}
