<?php

use Illuminate\Database\Seeder;
use App\Provincia;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::insert([
        	['name'=>'Maputo','regiao'=>'Sul'],
        	['name'=>'Gaza','regiao'=>'Sul'],
        	['name'=>'Inhambane','regiao'=>'Sul'],
        	['name'=>'Sofala','regiao'=>'Centro'],
        	['name'=>'Manica','regiao'=>'Centro'],
        	['name'=>'Tete','regiao'=>'Centro'],
        	['name'=>'Zambezia','regiao'=>'Centro'],
        	['name'=>'Nampula','regiao'=>'Norte'],
        	['name'=>'Cabodelgado','regiao'=>'Norte'],
        	['name'=>'Niassa','regiao'=>'Norte']
        	]);
    }
}
