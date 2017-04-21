<?php

use Illuminate\Database\Seeder;

class hinhthuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hinhthuc')->insert([
    		'ten' => 'Sang trọng',
    		'mota' => 'rất sang trọng'
    		]);
        DB::table('hinhthuc')->insert([
    		'ten' => 'Vỉa hè',
    		'mota' => 'rất vỉa hè'
    		]);
        DB::table('hinhthuc')->insert([
    		'ten' => 'Lề đường',
    		'mota' => 'rất lề đường'
    		]);
        
    }
}