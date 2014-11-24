<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DowdowLeagueOfLegendsAPIBundle:Default:index.html.twig', array('name' => $name));
    }
}
