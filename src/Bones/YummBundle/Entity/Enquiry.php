<?php
// src/Bones/YummBundle/Entity/Enquiry.php

namespace Bones\YummBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

class Enquiry
{
	protected $name;
	protected $email;
	protected $subject;
	protected $body;

	public function getName() {	return $this->name; }
	public function setName($name) { $this->name = $name; }
	public function getEmail() { return $this->email; }
	public function setEmail($email) { $this->email = $email; }
	public function getSubject() { return $this->subject; }
	public function setSubject($subject) { $this->subject = $subject; }
	public function getBody() { return $this->body; }
	public function setBody($body) { $this->body = $body; }	

	public static function loadValidatorMetadata(ClassMetadata $metadata)
	{
		$metadata->addPropertyConstraint('name', new Assert\NotBlank(array('message' => 'ERROR: Please enter a name')));

		$metadata->addPropertyConstraint('email', new Assert\Email(array('message' => 'ERROR: Please enter a valid email.', 'checkMX' => 'true')));

		$metadata->addPropertyConstraint('subject', new Assert\NotBlank(array('message' => 'ERROR: Please enter a subject')));
		$metadata->addPropertyConstraint('subject', new Assert\Length(array(
			'min' => 3, 
			'max' => 20,
			'minMessage' => 'ERROR: Please include a longer subject in your contact form',
			'maxMessage' => 'ERROR: Subject is too long',
		)));

		$metadata->addPropertyConstraint('body', new Assert\Length(array(
			'min' => 10, 
			'max' => 500,
			'minMessage' => 'ERROR: Please include a longer message in your contact form',
			'maxMessage' => 'ERROR: Message too long',
		)));
	}	
}