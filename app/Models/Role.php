<?php
// namespace App;
namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $table = "roles";
    
    protected $fillable = [
        'name', 'display_name', 'description'
    ];

   /* public function users()
    {
        // return $this->belongsToMany('App\Models\User');
        return $this->hasMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function assign(Permission $permission) //Gives permission to a role.
    {
        return $this->permissions()->save($permission);
    }*/
}