<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories= [
            'pizza',
            'italiano',
            'dessert',
            'siciliano',
            'fast-food',
            'americano',
            'healty-food',
            'vegetariano',
            'caseificio',
            'turco',
            'arabo',
            'messicano',
            'hawaiiano',
            'poke',
            'giapponese',
            'pesce',
            'sushi',
            'carne',
            'cinese',
            'paninoteca',
            'bakery'
        ];

        foreach ($categories as $cat) {
            $category = new Category();

            $category -> name = $cat;
            $category -> slug = Str::slug($cat, '-');

            $category -> save();

        }
    }
}
