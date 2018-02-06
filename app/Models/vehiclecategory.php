<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\vehicle;


class vehiclecategory extends Model
{
	public $timestamps = false;
	protected $table = 'vehiclecategory';
	protected $guarded = ['_token'];

}