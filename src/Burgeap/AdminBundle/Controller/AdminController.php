<?php

namespace Burgeap\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Burgeap\AdminBundle\Entity\Client;

class AdminController extends Controller
{
    public function indexAction()
    {   
        return $this->render('BurgeapAdminBundle:Admin:index.html.twig');
    }
    
    public function projectsAction()
    {
        return $this->render('BurgeapAdminBundle:Admin:projects.html.twig');
    }
    
    public function currentProjectsAction()
    {
        return $this->render('BurgeapAdminBundle:Admin:current-projects.html.twig');
    }
    
    public function deadlinesAction()
    {
        return $this->render('BurgeapAdminBundle:Admin:deadlines.html.twig');
    }
    public function calendarAction()
    {
        return $this->render('BurgeapAdminBundle:Admin:calendar.html.twig');
    }
    
    private function execute()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getEntityManager();
        $rep = $em->getRepository('BurgeapAdminBundle:Client');
        
        $client1 = new Client();
        $client1->setName("Areva")
                ->setAddress("2, avenue du Maréchal Foch")
                ->setCity("Paris")
                ->setZip(75015)
                ->setPhone("0134562346");
        $em->persist($client1);
        $em->flush();
    }
}
