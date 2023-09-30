<?php

namespace App\Models\country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;

    protected $table ="countries"; 
    protected $fillable =[
        "name",
        "population",
        "territory",
        "avg_price",
        "decription",
        "image",
        "continent"
    ];
}
