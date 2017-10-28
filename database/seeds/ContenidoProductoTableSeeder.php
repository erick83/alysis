<?php

use Illuminate\Database\Seeder;

class ContenidoProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contenido_producto')->insert([
            'id' => 1,
            'producto_id' => 1,
            'material_id' => null,
            'servicio_id' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
