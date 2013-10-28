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
    $metadata->addPropertyConstraint('name', new Assert\NotBlank());

    $metadata->addPropertyConstraint('email', new Assert\Email(array('message' => 'the email {{ vlaue }} is not a valid email.', 'checkMX' => 'true')));

    $metadata->addPropertyConstraint('subject', new Assert\NotBlank());
    $metadata->addPropertyConstraint('subject', new Assert\Length(array(
    	'min' => 2, 
    	'max' => 20,
    	'minMessage' => 'Please include a longer subject in your contact form',
    	'maxMessage' => 'Subject too long',
    )));

    $metadata->addPropertyConstraint('body', new Assert\Length(array(
    	'min' => 2, 
    	'max' => 50,
    	'minMessage' => 'Please include a longer message in your contact form',
    	'maxMessage' => 'Message too long',
    )));
  }	
}