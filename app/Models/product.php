<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
     use HasFactory;

     protected $fillable=[
        'product_name',
        'product_description',
        'image'

     ];

}
