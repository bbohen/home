<?php

class Controller_Home extends Controller_App
{
	public function action_index()
	{
		$this->template->content = View::forge('home/index', array(
			'projects' => Model_Project::get_projects()
		));

		//no template for construction
		//return Response::forge(View::forge('utility/construction'));
	}

	public function action_hello()
	{
		return Response::forge(ViewModel::forge('welcome/hello'));
	}

	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
