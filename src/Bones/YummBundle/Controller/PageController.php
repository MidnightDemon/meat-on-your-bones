<?php
// src/Bones/YummBundle/Controller/PageController.php

namespace Bones\YummBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bones\YummBundle\Entity\Enquiry;
use Bones\YummBundle\Form\EnquiryType;

class PageController extends Controller
{
	public function indexAction()
	{
		return $this->render('BonesYummBundle:Page:index.html.twig');
	}

	public function aboutAction()
	{
		return $this->render('BonesYummBundle:Page:about.html.twig');
	}

	public function contactAction()
	{
		$enquiry = new Enquiry();
		$form = $this->createForm(new EnquiryType(), $enquiry);

		$request = $this->getRequest();
		if($request->getMethod() == 'POST') {
			$form->bind($request);

			if($form->isValid()) {
				//perform some action (email ect)
				//redirect - this is important to prevent users reposting
				//the form if they refresh the page

				return $this->redirect($this->generateUrl('bones_yumm_contact'));
			}
		}

		return $this->render('BonesYummBundle:Page:contact.html.twig', array('form' => $form->createView()));
	}
}