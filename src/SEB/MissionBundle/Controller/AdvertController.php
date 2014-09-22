<?php

namespace SEB\MissionBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')
                        ->render('SEBMissionBundle:Advert:index.html.twig', array('nom' =>' Winzou'));
        return new Response($content);
    }
    
    public function viewAction($id)
    {
        //id vaut 5 si l'on apelle l'URL /platform/5
        // on recupere depuis la bdd l'annonce correspondand a  l'id $id
        // puis on passe l'annonce a la vue pour l'affichage
        
        return new Response("Affiche l'annonce d'id: " .$id);
    }
    
    public function viewSlugAction($slug, $year, $_format){
        
        return new Response("on pourrait afficher l'annonce correspondant au format slug"
                .$slug. ", créée en " .$year. " et au format " . $_format.".");
    }
}