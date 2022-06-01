<?php

class NotFoundController extends Controller
{
	function index()
	{
		$this->generate('404');
	}

}
