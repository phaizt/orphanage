<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Employee extends Authenticatable
{
  	use SoftDeletes;
	protected $table = 'tb_employee';
	protected $fillable = array('name', 'username', 'password', 'role', 'phone', 'email', 'dob', 'pob', 'religion', 'address', 'description', 'gender', 'visible', 'reset_password');

	protected $hidden = [
        'password', 'remember_token',
    ];

	public function scopeTableName() {
        return $this->table;
    }

}
