<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
        	['name'=>'Admin','description'=>'This is admin'],
        	['name'=>'Director','description'=>'This is director'],
        	['name'=>'Manager','description'=>'This is manager'],
        	['name'=>'CEO','description'=>'This is CEO'],
           ['name'=>'DATA TYPIST', 'description'=>'This is DATA TYPIST']
        	]);
    }
}
