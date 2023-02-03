<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('blood_qty');
          $table->string('blood_status')->default('pending');
          $table->string('donate_date');
          $table->string('result_date')->nullable();
          $table->string('blood_type');
          $table->string('sysphilis')->nullable();
          $table->string('hepatitis_B_virus')->nullable();
          $table->string('human_immunodeﬁciency_virus')->nullable();
          $table->string('hepatitis_C_virus')->nullable();
          $table->string('t_cruzi')->nullable();
          $table->string('malaria')->nullable();
          $table->string('human_T_lympotrophic_virus')->nullable();
          $table->string('west_nile_virus')->nullable();
          $table->string('cytomegalovirus')->nullable();
          $table->string('hepatitis_E_virus')->nullable();
          $table->string('email_status')->default('pending');

          $table->unsignedBigInteger('donor_id');
          $table->foreign('donor_id')->references('id')->on('donors')->onDelete("cascade");

          $table->unsignedBigInteger('hospital_id');
          $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete("cascade");

          $table->unsignedBigInteger('stock_id');
          $table->foreign('stock_id')->references('id')->on('stocks')->onDelete("cascade");

          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
