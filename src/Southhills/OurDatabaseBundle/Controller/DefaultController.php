<?php

namespace Southhills\OurDatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SouthhillsOurDatabaseBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function getMeACarAction($id)
	{
		$car = $this->getDoctrine()
                    ->getRepository("SouthhillsOurDatabaseBundle:Car")
                    ->find($id);
        if($car)
        {
            return new Response("You found a " .$car->getColor(). " " .$car->getMake(). " " .$car->getModel(). " from year " .$car->getYear());			
        }
		else
		{
			return new Response("Car not found");
		}
	}
}
