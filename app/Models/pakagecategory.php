<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class pakagecategory extends Model
{
	public $timestamps = false;
	protected $table = 'pakagecategory';
	protected $guarded = ['_token'];



// public function parent()
// {
//     return $this->belongsTo('App\Models\pakagecategory', 'parent_id');
// }

// public function getParentsNames() 
// {
//     if($this->parent) 
//     {
//         return $this->parent->getParentsNames(). " > " . $this->name;
//     } 
//     else 
//     {
//         return $this->name;
//     }
// }

}