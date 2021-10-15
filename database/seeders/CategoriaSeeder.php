<?php

namespace Database\Seeders;

use App\Models\Categorium;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $categoria = new Categorium();
      $categoria->nombre = "Muebles";
      $categoria->save();

      $categoria2 = new Categorium();
      $categoria2->nombre =  "Ropa";
      $categoria2->save();

      $categoria3 = new Categorium();
      $categoria3->nombre = "Electrodomésticos";
      $categoria3->save();
   }
}
