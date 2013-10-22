<?php
// src/Bones/YummBundle/Entity/Enquiry.php

namespace Bones\YummBundle\Entity;

class Enquiry
{
	protected $name;
	protected $email;
	protected $subject;
	protected $body;

	public function getName() {	return $this->name; }
	public function setName($name) { $this->name = $name; }
	public function getEmail() { return $this->email; }
	public function setEmail() { $this->email = $email; }
	public function getSubject() { return $this->subject; }
	public function setSubject() { $this->subject = $subject; }
	public function getBody() { return $this->body; }
	public function setBody() { $this->body = $body; }	
}