<?php

// namespace App;

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\vehicle;


class vehicle extends Model
{
	public $timestamps = false;
	protected $table = 'vehicle';
	protected $guarded = ['_token'];

}