<?php

use App\Product;
use App\User;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Element;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        // $usersId = $users->pluck('id')->all();

        $restaurants = config('restaurants');
        foreach ($restaurants as $r ) {
            $products = $r['products'];
            foreach ($products as $p) {

                $product = new Product();
    
                $product -> name = $p['name'];
                $product -> cover = $p['cover'];
                $product -> description = $p['description'];
                $product -> price = $p['price'];
                $product -> visibility = $p['visibility'];
                $product -> category = $p['category'];

                // $product -> user_id = $usersId;
    
                $product -> save();
            }
        }
    }
}
