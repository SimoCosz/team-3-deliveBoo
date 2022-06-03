<?php

use App\Tipology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TipologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipologies = ['primo', 'secondo', 'antipasto', 'dessert', 'bevande', 'contorno'];
        foreach($tipologies as $t) {
            $tipology = new Tipology();
            $tipology -> name = $t;
            $tipology -> slug = Str::slug($t, '-');
            $tipology -> save();
        }
    }
}
