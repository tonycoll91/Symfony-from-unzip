<?php

namespace Southhills\OurFirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SouthhillsOurFirstBundle:Default:index.html.twig', array('name' => $name));
    }
	
    public function jumpAction($name)
	{
		$name = ucfirst($name);
        return $this->render('SouthhillsOurFirstBundle:Default:jump.html.twig', array('name' => $name));
    }
	
    public function diveAction($name)
    {
        $name = ucfirst($name);
        return $this->render('SouthhillsOurFirstBundle:Default:dive.html.twig', array('name' => $name));
    }
    
    public function contactUsAction()
    {
        return new Response('<html><body><h1>Contact Us!</h1></body></html>');
    }
	
	public function testGlobalTemplateAction()
    {
        return $this->render('SouthhillsOurFirstBundle:Default:testGlobalTemplate.html.twig');
    }
}
