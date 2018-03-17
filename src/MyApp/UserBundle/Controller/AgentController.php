<?php
/**
 * Created by PhpStorm.
 * User: Marwen
 * Date: 04/11/2016
 * Time: 11:35
 */

namespace MyApp\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgentController extends Controller
{

 function AffichAction()
 {
     return $this->render('UserBundle:Agent:index.html.twig');
 }
}