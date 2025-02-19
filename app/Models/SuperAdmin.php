<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // This is crucial
use Illuminate\Notifications\Notifiable;

class SuperAdmin extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['email', 'password'];

    protected $hidden = ['password', 'remember_token'];
}
