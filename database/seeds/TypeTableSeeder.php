<?php

use Illuminate\Database\Seeder;
use App\type;
class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        type::create(
            ['type'=>'Demanda Contenciosas']
        );
    }
}
