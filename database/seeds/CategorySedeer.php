<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'Laravel',
        	'slug' => str_slug('Laravel')
        ]);

        Category::create([
        	'name' => 'Sample',
        	'slug' => str_slug('Sample')
        ]);
    }
}
