<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class UserData extends Model
{
	use EntrustUserTrait;
     protected $table = 'users';
    // protected $primaryKey = “isbn_no”;
    // public $incrementing = false;
}
