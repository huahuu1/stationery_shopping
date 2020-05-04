<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
            'name' => array(
                'required',
                'unique:users',
                'regex:/^(?=.{5,10}$)[a-zA-Z]+(\d*[a-zA-Z]*)*$/',
            ),
            'email' => array(
                'required',
                'unique:users',
                'regex:/^(?=.{15,40}$)[a-zA-Z]+\d*((_|-|\.)?[a-zA-Z0-9])*@(\d{0,4}[a-zA-Z]{1,5}\d{0,4}){2}(\.[a-zA-Z]{2,4}){1,2}$/',
            ),
            'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
        ],
        [
            'name.required' => 'User Name is required.',
            'name.unique' => 'User Name has already existed.',
            'name.regex' => 'User Name must consist of 5 to 10 alphanumeric characters and begin with an alphabet character.',
            'email.required' => 'Email is required.',
            'email.unique' => 'Email has already existed.',
            'email.regex' => 'Email is a string of 15 to 40 alphanumeric characters that is formatted like this: a-1.b_c@247xyz.com.vn.',
            'password.required' => 'Password is required.',
        ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
