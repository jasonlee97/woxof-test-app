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
            'name' => 'John',
            'surname' => 'Johnson',
            'email' => 'j.johnson@example.com',
            'password' => bcrypt('P@$$w0rd'),
        ]);
    }
}
