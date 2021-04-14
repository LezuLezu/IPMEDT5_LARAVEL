<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clean extends Model
{
    use HasFactory;
    protected $table = 'user_cleaning';
    public $timestamps = false;
    protected $fillable =[
        'date', 
        'time',
        'method',
        'product',
    ];
}
