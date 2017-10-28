<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductosTableSeeder::class);
        $this->call(ServiciosTableSeeder::class);
        $this->call(MaterialesTableSeeder::class);
        $this->call(ContenidoProductoTableSeeder::class);
        $this->call(InventarioTableSeeder::class);
        $this->call(ConstantesTableSeeder::class);
    }
}
