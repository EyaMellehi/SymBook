<?php

namespace App\Controller;

use App\Repository\LivresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LivresController extends AbstractController
{
    #[Route('/Admin/livres', name: 'app_livres')]
    public function index(LivresRepository  $rep): Response
    {   $livres=$rep->findAll();
        //dd($livres);
        return $this->render('livres/index.html.twig', ['livres' => $livres]);
    }
    #[Route('/Admin/livres/show/{id}', name: 'app_livres_show')]
    public function showId(LivresRepository  $rep,$id): Response
    {   $livre=$rep->find($id);
        dd($livre);
        return $this->render('livres/index.html.twig', ['livre' => $livre]);
    }
}
