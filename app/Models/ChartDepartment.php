<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ChartDepartment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'chart_percentage',
        'chart_color',
        'chart_name_mm',
        'chart_name_en',
        'chart_name_jp',
        'chart_explan_mm',
        'chart_explan_en',
        'chart_explan_jp',
        'chart_display_order',
        'chart_display_flg',
    ];

    protected $table = "chart_department";

    public function chartDepartList()
    {
        return ChartDepartment::displayList()->orderBy('chart_display_order', 'asc')->get();
    }

    public function scopeDisplayList($query)
    {
        return $query->where('chart_display_flg', 0);
    }
}
