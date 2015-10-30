<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public static $rules = array(
			'firstName'	=> 'required|alpha|min:2',
			'lastName'	=> 'required|alpha|min:2',
			'email'		=> 'required|email|unique:user',
			'password'	=> 'required'

		);

	protected $table = 'user';
	
	protected $hidden = array('password', 'remember_token');



}
