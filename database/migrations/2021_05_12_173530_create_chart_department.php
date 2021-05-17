<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_department', function (Blueprint $table) {
            $table->id();
            $table->integer('chart_percentage')->default(0);
            $table->string('chart_color')->nullable();
            $table->string('chart_name_mm')->nullable();
            $table->string('chart_name_en')->nullable();
            $table->string('chart_name_jp')->nullable();
            $table->string('chart_explan_mm')->nullable();
            $table->string('chart_explan_en')->nullable();
            $table->string('chart_explan_jp')->nullable();
            $table->integer('chart_display_order');
            $table->integer('chart_display_flg')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chart_department');
    }
}
