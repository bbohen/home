<?php

class Model_Project extends \Orm\Model
{
	protected static $_table_name = 'projects';

	protected static $_properties = array( 
		'id',
		'title',
		'about',
		'tech',
		'type'
	);

	public static function get_projects()
	{
		//Temporary
		return static::query()->get();
	}

	public static function get_project($title)
	{
		return static::find()->where('title', $title)->get_one();
	}
}