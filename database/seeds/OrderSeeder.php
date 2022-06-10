<?php

use App\Order;
use App\Product;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $user = User::all();
        // $user_id= $user->pluck('id')->all();

        // for ($i=0; $i < 30 ; $i++) { 

        //     $order = new Order();
    
        //     $order -> client_name = $faker->userName();
        //     $order -> client_surname = $faker->lastName();
        //     $order -> client_address = $faker->address();
        //     $order -> client_city = $faker->city();
        //     $order -> client_phone = $faker->e164phoneNumber();
        //     $order -> client_email = $faker->email();
        //     $order -> payment_state = $faker->boolean();
        //     $order -> total_price = $faker->randomNumber(2, false);
        //     $order -> user_id = $faker->randomElement($user_id);
    
        //     $order -> save();
    
        //     $products = Product::where('user_id', $order->user_id);
        //     $productId = $products->pluck('id')->all();

        //     $randomInt = $faker->numberBetween(1,4);
        //     $randomProducts = $faker->randomElements($productId, $randomInt);
            

        //     foreach ($randomProducts as $randomProduct) {
        //         DB::table('order_product')->insert([
        //             'order_id' => $order->id,
        //             'product_id' => $randomProduct,
        //             'quantity' => $faker->numberBetween(1,4)
        //         ]);
        //     }

        // }
    }
}