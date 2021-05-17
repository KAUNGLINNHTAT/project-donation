<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChartDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chart_department')->insert([
            [
                'id' => '1',
                'chart_percentage' => '23',
                'chart_color' => '#67b7dc',
                'chart_name_mm' => 'ကျန်းမာရေး',
                'chart_name_en' => 'Health',
                'chart_name_jp' => 'Health',
                'chart_explan_mm' => 'ကျန်းမာရေး နှင့်ပက်သက်သော ဝန်ထမ်းများအားလုံး',
                'chart_explan_en' => 'ကျန်းမာရေး နှင့်ပက်သက်သော ဝန်ထမ်းများအားလုံး',
                'chart_explan_jp' => 'ကျန်းမာရေး နှင့်ပက်သက်သော ဝန်ထမ်းများအားလုံး',
                'chart_display_order' => 1,
                'chart_display_flg'   => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'id' => '2',
                'chart_percentage' => '9',
                'chart_color' => '#6794dc',
                'chart_name_mm' => 'ပညာရေး',
                'chart_name_en' => 'Education',
                'chart_name_jp' => 'Education',
                'chart_explan_mm' => 'ပညာရေး နှင့်ပက်သက်သော ဝန်ထမ်းများအားလုံး',
                'chart_explan_en' => 'ပညာရေး နှင့်ပက်သက်သော ဝန်ထမ်းများအားလုံး',
                'chart_explan_jp' => 'ပညာရေး နှင့်ပက်သက်သော ဝန်ထမ်းများအားလုံး',
                'chart_display_order' => 2,
                'chart_display_flg'   => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'id' => '3',
                'chart_percentage' => '6',
                'chart_color' => '#6771dc',
                'chart_name_mm' => 'ပို့ဆောင်ရေး',
                'chart_name_en' => 'Transportation',
                'chart_name_jp' => 'Transportation',
                'chart_explan_mm' => 'ပို့ဆောင်ရေး နှင့်ပက်သက်သော ဝန်ထမ်းများအားလုံး',
                'chart_explan_en' => 'ပို့ဆောင်ရေး နှင့်ပက်သက်သော ဝန်ထမ်းများအားလုံး',
                'chart_explan_jp' => 'ပို့ဆောင်ရေး နှင့်ပက်သက်သော ဝန်ထမ်းများအားလုံး',
                'chart_display_order' => 3,
                'chart_display_flg'   => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'id' => '4',
                'chart_percentage' => '30',
                'chart_color' => '#8067dc',
                'chart_name_mm' => 'တစ်ခြားဌာန ',
                'chart_name_en' => 'Other',
                'chart_name_jp' => 'Other',
                'chart_explan_mm' => 'ဌာနအမည်အတိအကျရရှိသော်လည်း ထုတ်ဖော်ရန် မသင့်သော ဌာနများ',
                'chart_explan_en' => 'ဌာနအမည်အတိအကျရရှိသော်လည်း ထုတ်ဖော်ရန် မသင့်သော ဌာနများ',
                'chart_explan_jp' => 'ဌာနအမည်အတိအကျရရှိသော်လည်း ထုတ်ဖော်ရန် မသင့်သော ဌာနများ',
                'chart_display_order' => 4,
                'chart_display_flg'   => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'id' => '5',
                'chart_percentage' => '11',
                'chart_color' => '#a367dc',
                'chart_name_mm' => 'ဌာနစုံ',
                'chart_name_en' => 'All Department',
                'chart_name_jp' => 'All Department',
                'chart_explan_mm' => 'ဌာနစုံမှအဖွဲ့အစည်းများ',
                'chart_explan_en' => 'ဌာနစုံမှအဖွဲ့အစည်းများ',
                'chart_explan_jp' => 'ဌာနစုံမှအဖွဲ့အစည်းများ',
                'chart_display_order' => 5,
                'chart_display_flg'   => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'id' => '6',
                'chart_percentage' => '7',
                'chart_color' => '#c767dc',
                'chart_name_mm' => 'အဖွဲ့အစည်းများ',
                'chart_name_en' => 'Organization',
                'chart_name_jp' => 'Organization',
                'chart_explan_mm' => 'တခြားကူညီသူ အဖွဲ့အစည်းများထံ ပေးအပ်မှု',
                'chart_explan_en' => 'တခြားကူညီသူ အဖွဲ့အစည်းများထံ ပေးအပ်မှု',
                'chart_explan_jp' => 'တခြားကူညီသူ အဖွဲ့အစည်းများထံ ပေးအပ်မှု',
                'chart_display_order' => 6,
                'chart_display_flg'   => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'id' => '7',
                'chart_percentage' => '14',
                'chart_color' => '#dc67ce',
                'chart_name_mm' => 'အင်ဂျင်နီယာ',
                'chart_name_en' => 'Engineer',
                'chart_name_jp' => 'Engineer',
                'chart_explan_mm' => 'အင်ဂျင်နီယာလုပ်ငန်းဆိုင်ရာ ဝန်ထမ်းများ',
                'chart_explan_en' => 'အင်ဂျင်နီယာလုပ်ငန်းဆိုင်ရာ ဝန်ထမ်းများ',
                'chart_explan_jp' => 'အင်ဂျင်နီယာလုပ်ငန်းဆိုင်ရာ ဝန်ထမ်းများ',
                'chart_display_order' => 7,
                'chart_display_flg'   => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
