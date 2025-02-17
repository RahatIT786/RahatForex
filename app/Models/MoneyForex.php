<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyForex extends Model
{
    use HasFactory;

    protected $table = '_money_forex';

    protected $fillable = ['name','mobile', 'email'];

}
