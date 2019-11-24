<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
	*/
     public function run()
     {
      DB::table('users')->insert([
	[
		'name' => 'admin',
		'password' => bcrypt('admin'),
        'isAdmin' => '1',

	],

	[
		'name' => 'gestionnaire',
		'password' => bcrypt('gestionnaire'),
        'isGest' => '2',
	],
	[
		'name' => 'user',
		'password' => bcrypt('user'),
        'isUser' => '3',
	],

       ]);
      }
}
