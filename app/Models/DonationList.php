<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DonationList extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'desicion_date',
        'desicion_amount',
        'donation_amount',
        'donation_group',
        'donation_individual',
        'created_id',
        'updated_id',
        'published_flg',
        'published_at',
        'note',
    ];

    protected $table = "donation_list";

    public function searchDonationList($arr_search) 
    {

    }

    /* Search By Date */
    public function scopeDesicionDate($query, $search_date) {
        return $query->where('desicion_date', $search_date);
    }

    /* Search By Month */
    public function scopeDesicionMonth($query, $search_month) {
        return $query->whereMonth('desicion_date', $search_month);
    }

    public function getCreateUser()
    {
        return $this->belongsTo(User::class, 'created_id', 'id');
    }

    public function getUpdateUser()
    {
        return $this->belongsTo(User::class, 'updated_id', 'id');
    }
}
