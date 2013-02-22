<?php

class Controller_Projects extends Controller_App
{
	
	public function action_index()
	{
		//Casset::css('add_event.css');
		//Casset::css('animate.css');
		Response::redirect(Uri::base());
		
	}

	public function action_get_project($title)
	{
		//Casset::css('event.css');
		$project = Model_Project::get_project($title);
		$this->template->content = View::forge('project/details', array(
			'project' => $project
		));
	}
}