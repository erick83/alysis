<?php

use Illuminate\Database\Seeder;

class InventarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventario')->insert([
            'id' => 1,
            'material_id' => 1,
            'factura' => '001',
            'precio' => 35000,
            'cantidad' => 100,
            'existencia' => 100,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);

        DB::table('inventario')->insert([
            'id' => 2,
            'material_id' => 2,
            'factura' => '002',
            'precio' => 1500,
            'cantidad' => 150,
            'existencia' => 150,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
