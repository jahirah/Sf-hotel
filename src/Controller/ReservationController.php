<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="app_reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }

    /**
     * @Route("/Reservation/Principale", name="Principale_reservation")
     */
    public function principale(): Response
    {
        return $this->render('index/principale.html.twig');
    }

    /**
     * @Route("/Reservation/Chambre", name="Chambre_reservation")
     */
    public function chambre(): Response
    {
        return $this->render('index/chambre.html.twig');
    }

    /**
     * @Route("/Reservation/Mariage", name="Mariage_reservation")
     */
    public function mariage(): Response
    {
        return $this->render('index/mariage.html.twig');
    }

    /**
     * @Route("/Reservation/Evenement", name="Evenement_reservation")
     */
    public function evenement(): Response
    {
        return $this->render('index/evenement.html.twig');
    }

    /**
     * @Route("/Reservation/Conference", name="Conference_reservation")
     */
    public function conference(): Response
    {
        return $this->render('index/conference.html.twig');
    }
}
