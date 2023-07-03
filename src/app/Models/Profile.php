<?php

namespace Sham\ProfileEnhancer\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticated;

class Profile extends Authenticated
{
    use HasFactory;
    protected $table = 'users';

    protected $guarded = [];

    public static function getAllUsers(){

   }
}
