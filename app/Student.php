<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable=[
    	'pname',
    	'price',
		'offer',
		'rating',
		'warranty',
		'description',
		'image'
    ];
}
