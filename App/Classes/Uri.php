<?php

namespace App\Classes;

class Uri
{
	private $uri;

	public function __construct()
	{
		$this->uri = $_SERVER['REQUEST_URI'];
	}

	public function emptyUri()
	{
		return ($this->uri == '/') ? true : false;
	}

	public function getUri()
	{
		//dump($this->uri,'vamos em frente');
		return $this->uri;

	}
}