<?php

namespace Burgeap\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BurgeapAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
