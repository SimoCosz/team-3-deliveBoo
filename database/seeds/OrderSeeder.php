<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();

        $order -> client_name = 'Mario';
        $order -> client_surname = 'Rossi';
        $order -> client_address = 'Via da qui';
        $order -> client_city = 'Roma';
        $order -> client_phone = '3403936253';
        $order -> client_email = 'ciccio@gmail.com';
        $order -> payment_state = true;
        $order -> total_price = 34.50;

        $order -> save();
    }
}