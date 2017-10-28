<?php

use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            'id' => 1,
            'servicio' => 'Diseño Gráfico General',
            'precio' => 20000,
            'unidad' => 'hora',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('servicios')->insert([
            'id' => 2,
            'servicio' => 'Diseño de Identidad Corporativa',
            'precio' => 680000,
            'unidad' => 'unidad',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('servicios')->insert([
            'id' => 3,
            'servicio' => 'Diseño Flyer para Eventos',
            'precio' => 60000,
            'unidad' => 'unidad',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('servicios')->insert([
            'id' => 4,
            'servicio' => 'Diseño Presentaciones Gráficas',
            'precio' => 40000,
            'unidad' => 'unidad',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('servicios')->insert([
            'id' => 5,
            'servicio' => 'Manejo de Redes Sociales',
            'precio' => 350000,
            'unidad' => 'cuenta por mes',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('servicios')->insert([
            'id' => 6,
            'servicio' => 'Página Web',
            'precio' => 1200000,
            'unidad' => 'pagina basica',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('servicios')->insert([
            'id' => 7,
            'servicio' => 'Fotografía Profesional de Estudio',
            'precio' => 550000,
            'unidad' => 'minimo',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('servicios')->insert([
            'id' => 8,
            'servicio' => 'Fotografía Profesional de Eventos',
            'precio' => 750000,
            'unidad' => 'por evento',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
