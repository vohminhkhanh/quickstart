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
        // $this->call(UsersTableSeeder::class);
    }
}
/**
 * summary
 */
class insertData extends Seeder
{
	public function run()
	{
		DB::table('task')->insert([
			['name'=>'tasks']
		])
	}
  
}
