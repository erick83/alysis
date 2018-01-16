<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'producto' => 'Impresiones Laser',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Gigantografias',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Cortes en Vinil',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Tazas Sublimadas',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Chapas',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Boligrafos',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Tarjetas de Impresion',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Identificadores',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Estampados en Textil',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Bordados',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Rotulados',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Publicidad Exterior',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('productos')->insert([
            'producto' => 'Publicidad Interior',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
