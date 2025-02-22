<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sellsforex extends Model
{
    use HasFactory;

    protected $table = 'sell_forex';

    protected $fillable = ['name','mobile', 'email'];
}
