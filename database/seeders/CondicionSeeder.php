<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Condicion;

class CondicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $condicion1 = new Condicion();
        $condicion1->nombre = "Nuevo";
        $condicion1->save();

        $condicion2 = new Condicion();
        $condicion2->nombre =  "Segunda";
        $condicion2->save();

        $condicion3 = new Condicion();
        $condicion3->nombre = "Restaurado";
        $condicion3->save();
    }
}