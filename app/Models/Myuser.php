<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Myuser extends Model  implements Authenticatable {
    use
    AuthenticatableTrait,HasFactory, Notifiable,HasApiTokens;
    protected $fillable = [
        "fullName",
        "NationalId",
        "email",
        "passwords",
        "role"
    ];
    protected $hidden=[
        
        "passwords"
    ];
}