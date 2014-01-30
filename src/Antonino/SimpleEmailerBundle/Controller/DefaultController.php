<?php

namespace Antonino\SimpleEmailerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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
	
	public function insertIntoDBAction($emailAddress)
	{
		$EmailLogEntry = new EmailLogEntry();
		$EmailLogEntry->setEmailAddress($emailAddress);
		$EmailLogEntry->setDateTime(date('m/d/Y H:i:s'));
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($EmailLogEntry);
		$em->flush();
		
		return new Response('Created email address id '.$emailAddress->getId());
	}
	
	
}
