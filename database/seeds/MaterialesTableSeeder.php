<?php

use Illuminate\Database\Seeder;

class MaterialesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materiales')->insert([
            'id' => 1,
            'material' => 'Tazas de sublimado',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 2,
            'material' => 'Papel de sublimación',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 3,
            'material' => 'Papel glasé',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 4,
            'material' => 'Papel calcomanía',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 5,
            'material' => 'Vinil textil',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 6,
            'material' => 'Vinil de corte',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 7,
            'material' => 'Vinil de impresión',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 8,
            'material' => 'Boligrafos de sublimado',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 9,
            'material' => 'Chapas',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 10,
            'material' => 'Tintas de sublimación',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 11,
            'material' => 'Reglas de medición',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 12,
            'material' => 'Cintas pegantes',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 13,
            'material' => 'Etiquetas',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 14,
            'material' => 'Envases',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('materiales')->insert([
            'id' => 15,
            'material' => 'Empaques',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
