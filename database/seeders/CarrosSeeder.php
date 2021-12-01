<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Modelcarros $carros)
    {
        DB::table('carros')->insert([
            'id_user' => 1,
            'modelo' => "Corsa",
            'ano_lancamento' => "2010",
            'valor' => "20",
            'created_at'=>new \DateTime('now'),
            'updated_at'=>new \DateTime('now'),
        ]);

      DB::table('carros')->insert([
        'id_user' => 2,
        'modelo' => "Celta",
        'ano_lancamento' => "2012",
        'valor' => "25",
        'created_at'=>new \DateTime('now'),
        'updated_at'=>new \DateTime('now'),
        ]);
     }
}
