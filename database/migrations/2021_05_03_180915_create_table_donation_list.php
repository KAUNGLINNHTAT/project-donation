<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDonationList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_list', function (Blueprint $table) {
            $table->id();
            $table->date('desicion_date');
            $table->integer('desicion_amount')->nullable();
            $table->integer('donation_amount')->nullable();
            $table->integer('donation_group')->nullable();
            $table->integer('donation_individual')->nullable();
            $table->integer('created_id');
            $table->integer('updated_id')->nullable();
            $table->integer('published_flg')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('donation_list');
    }
}
