<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            'Elétrodomésticos',
            'Eletrônicos',
            'Celulares',
            'Televisores',
            'Móveis'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    
    }

}
