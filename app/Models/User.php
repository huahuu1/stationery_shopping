<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';
    //
    // supplier_tables
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // protected $rules_update = [
    //     'email' => 'required|email|unique:users,email_address,'.$id,
    //     'name' => "required",
    //     'password' => "required|min:6|same:password_confirm",
    //     'password_confirm' => "required:min:6|same:password",
    //     'password_current' => "required:min:6"
    // ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
