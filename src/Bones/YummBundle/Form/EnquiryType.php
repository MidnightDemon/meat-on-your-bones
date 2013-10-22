<?php 
// src/Bones/YummBundle/Form/EnquiryType.php

namespace Bones\YummBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\form\FormBuilderInterface;

class EnquiryType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('name');
		$builder->add('email', 'email');
		$builder->add('subject');
		$builder->add('body', 'textarea');
	}

	public function getName() { return 'contact'; }
	
}
