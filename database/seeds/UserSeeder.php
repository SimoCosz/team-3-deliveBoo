<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = config('restaurants');
        foreach ($users as $u) {
            $user = new User();
            
            $user -> name = $u['name'];
            $user -> address = $u['address'];
            $user -> city = $u['city'];
            $user -> telephone_number = $u['telephone_number'];
            $user -> p_iva = $u['p_iva'];
            $user -> cover = $u['cover'];
            $user -> email = $u['email'];
            $user -> password = Hash::make($u['password']);
            $user -> slug = Str::slug($u['name'], '-');

            $user->save();
        }
    }
}
