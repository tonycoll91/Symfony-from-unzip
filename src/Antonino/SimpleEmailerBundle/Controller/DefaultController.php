<?php

namespace Antonino\SimpleEmailerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AntoninoSimpleEmailerBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function globalTemplateAction()
	{
		return $this->render('AntoninoSimpleEmailerBundle:Default:index.html.twig');
	}
}
