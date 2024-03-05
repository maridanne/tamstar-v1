<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->id('est_id');
            $table->unsignedBigInteger('classification_id');
            $table->foreign('classification_id')->references('id')->on('classifications');
            $table->string('province', 30);
            $table->string('city_municipality', 30);
            $table->integer('male_emp_count');
            $table->integer('female_emp_count');
            $table->integer('num_of_employees');
            $table->integer('num_of_vehicles');
            $table->integer('num_of_rooms');
            $table->string('name_of_entity', 300);
            $table->string('address', 300);
            $table->string('owner_opmngr_genmngr', 100);
            $table->string('accreditation_no', 50);
            $table->string('type_of_organization', 100);
            $table->date('date_established');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establishments');
    }
};
