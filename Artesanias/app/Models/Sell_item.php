<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell_item extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'quantity'];
}
