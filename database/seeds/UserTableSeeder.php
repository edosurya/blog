<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{

		\App\User::create([
			'name' => 'admin_user',
			'email' => 'admin@admin.com',
			'password' => bcrypt('admin'),
			'remember_token' => md5(microtime() . env('APP_KEY')),
		]);

		TestDummy::times(10)->create('App\User');

	}
}
