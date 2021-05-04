<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function searchUser($search_arr) {
        $user = new User();
        if(isset($search_arr['name']) && $search_arr['name'] != "") { //Search By Name
            $user = $user->searchName($search_arr['name']);
        }

        if(isset($search_arr['email']) && $search_arr['email'] != "") { //Search By Name
            $user = $user->searchEmail($search_arr['email']);
        }

        if(isset($search_arr['role']) && is_array($search_arr['role']) && count($search_arr['role']) > 0) { //Search By Name
            $user = $user->searchRole($search_arr['role']);
        }

        return $user->notSuperAdminRole()->get();
    }

    public function scopeNotSuperAdminRole($query) {
        return $query->where('role', '<>', 'superadmin');
    }

    /* Search By Name */
    public function scopeSearchName($query, $name) {
        return $query->where('name', 'LIKE', '%'.$name.'%');
    }

    /* Search By Email */
    public function scopeSearchEmail($query, $email) {
        return $query->where('email', $email);
    }

    /* Search By Role */
    public function scopeSearchRole($query, $role) {
        return $query->whereIn('role', $role);
    }
}
