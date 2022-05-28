<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Category;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function showRegistrationForm()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('auth.register', compact('categories'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'address' => ['required', 'string', 'max:100'],
            'city' => ['required', 'string', 'max:100'],
            'telephone_number' => ['string', 'numeric'],
            'p_iva' => ['required', 'string', 'digits:11', 'unique:p_iva'],
            'cover' => ['nullable', 'string', 'image'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'categories' => ['required', 'exist:types,id']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['slug'] = User::getUniqueSlug($data['name']);
        $categories = Category::all();
        
        $user_data = [
            'name' => $data['name'],
            'address' => $data['address'],
            'city' => $data['city'],
            'telephone_number' => $data['telephone_number'],
            'p_iva' => $data['p_iva'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'slug' => $data['slug']
        ];

        $user = User::create($user_data);
        $user->categories()->sync($data['categories']);

        return $user;
    }
}
