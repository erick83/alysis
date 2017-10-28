<?php

use Illuminate\Database\Seeder;

class ConstantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('constantes')->insert([
            'id' => 1,
            'constante' => 'Porcentaje de Ganancia',
            'value' => 30,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('constantes')->insert([
            'id' => 2,
            'constante' => 'Porcentaje de Gastos Indirectos',
            'value' => 12.5,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
