<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
	
	
	User::create(array(
			'name'     => 'Eric',
			'email'    => 'eric@gmail.com',
			'authority'    =>'admin',
			'password' => Hash::make('123'),
	));
		

	}

}
