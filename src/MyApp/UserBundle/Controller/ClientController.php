<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBundle:Client:index.html.twig');
    }
}
