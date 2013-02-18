<?php

class Controller_APP extends Controller_Base
{
	public function before()
	{
		parent::before();

		$this->_init_assets();
	}

	private function _init_nav()
	{

	}

	private function _init_footer()
	{

	}

	private function _init_template_vars()
	{

	}

	private function _init_assets()
	{
		Casset::css('main.css');
	}
}