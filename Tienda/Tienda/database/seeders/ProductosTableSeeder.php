<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $subCategorias = [
            'Neumaticos' => ['Neumaticos de verano', 'Neumaticos de invierno', 'Neumaticos mixtos'],
            'Frenos' => ['Discos de freno', 'Pastillas de freno', 'Freno de tambor'],
            'Amortiguacion' => ['Amortiguadores', 'Resortes helicoidales', 'Copela de amortiguador'],
            'Motor' => ['Kit de distribucion', 'Bomba de agua', 'Turbo'],
            'Carroceria' => ['Faro principal', 'Piloto trasero', 'Espejo retrovisor', 'Amortiguador de maletero'],
            'Aceites y liquidos' => ['Aceite de motor', 'Liquido de frenos'],
            'Escape' => ['Catalizador', 'Sonda lambda', 'Valvula egr']
        ];
        
        $marcasRepuestos = [
            'Bosch',
            'Denso',
            'Valeo',
            'Delphi',
            'Brembo',
            'NGK',
            'KYB',
            'Luk',
            'Mann-Filter',
            'Hella'
        ];
        
        $categorias = [
            'Neumaticos' ,
            'Frenos',
            'Amortiguacion' ,
            'Motor',
            'Carroceria',
            'Aceites y liquidos' ,
            'Escape'
        ];
        

        for ($i = 0; $i < 200; $i++) {
            $numMarca= rand(0,9);
            $numCategoria= rand(0,6);
            
            $categoria = $categorias[$numCategoria];
            
            $numSubcategoria= rand(0,count($subCategorias[$categoria])-1);
            
            DB::table('producto')->insert([
                'nombre' => $faker->word,
                'marca' => $marcasRepuestos[$numMarca],
                'precio' => $faker->randomFloat(2, 0, 1000),
                'compatibilidad' => $faker->word,
                'categoria' => $categoria,
                'subcategoria' => $subCategorias[$categoria][$numSubcategoria],
                'rutaimg' => '1708857567.jpg',
                'descripcion' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
