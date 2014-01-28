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
	
	public function emailAction($emailAddress)
	{
		$message = \Swift_Message::newInstance()
			->setSubject('Hello Email')
			->setFrom('antoninocolletti23@gmail.com')
			->setTo($emailAddress)
			->setBody('Hello world!')
		;
		$this->get('mailer')->send($message);
		
		return $this->render('AntoninoSimpleEmailerBundle:Default:sentEmail.html.twig');
	}
}
