<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class addiconseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $icons=
        [
            
            
            "fa-solid fa-car",
            "fa-solid fa-vest",
            "fa-solid fa-landmark",
            "fa-solid fa-money-check-dollar",
            "fa-solid fa-film",
            "fa-solid fa-kitchen-set",
            "fa-solid fa-leaf",
            "fa-solid fa-microchip",
            "fa-solid fa-cloud-sun",
            "fa-solid fa-futbol",
        ];
        $i=0;
        // DB::table('categories')->insert()
        foreach(Category::all() as $category){
            $category->icon = $icons[$i];
            $category->save();
            $i++;
        }
    }
}
