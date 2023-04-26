<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    #[Route('/classroom', name: 'app_classroom')]
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }
    #[Route('/listform', name: 'listformation')]
    public function listformation ()
    {
        $var1="symfony";
        $var2="react";
        $var3="angular";

        return $this->render("classroom/formation.html.twig",array("variable1"=>$var1,"variable2"=>$var2,"variable3"=>$var3));
    }
}
