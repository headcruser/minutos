<?php
namespace Minuta\Models;

use Minuta\Models\Permission;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable=['name','display_name','description'];

	public function perms(){
		return $this->belongsToMany(Permission::class);
	}
}
