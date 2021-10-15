<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Categorium;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Producto::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'idCategoria' => Categorium::pluck('id')->random(),
         'nombre' => $this->faker->unique()->word(),
         'precio' => $this->faker->randomFloat(2, 50, 500),
         'stock' => $this->faker->randomNumber(2),
         'status' => $this->faker->randomElement([0, 1]),
         'url_img' => 'productos/' . $this->faker->image('public/img/productos', 320, 180, null, false)
      ];
   }
}
