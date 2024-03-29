<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'amount',
        'type',
        'hide_name_flg',
        'hide_amount_flg',
        'confirm_flg',
        'confirm_id',
    ];

    /**
     * Get the user that confirm the donation.
     */
    public function getUser()
    {
        return $this->belongsTo(User::class, 'confirm_id', 'id');
    }
}
