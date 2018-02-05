<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    /**
     * @Route("/event/{slug}", name="event")
     */
    public function index($slug)
    {

        //a supprimer
        $event = $slug;

        //get database object by slug
        //$event = $this->getDoctrine()->getRepository(SushiEntity::class)->find($slug);

        // get the slug and past db object to the view
        return $this->render('views/event/event.html.twig', [
            'event' => $event
        ]);
    }
}
