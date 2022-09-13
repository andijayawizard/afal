<?php

namespace Database\Seeders;

use App\Models\SubCategory as ModelsSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsSubCategory::factory()->count(10)->create();
    }
}