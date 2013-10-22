<?php
// src/Bones/YummBundle/Controller/PageController.php

namespace Bones\YummBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}