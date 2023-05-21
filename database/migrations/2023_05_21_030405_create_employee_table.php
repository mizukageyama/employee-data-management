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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('contact_number');
            $table->date('hire_date');
            $table->string('position');
            $table->string('email')->unique();
            $table->string('gender');
            $table->integer('age');
            $table->date('birth_date');
            $table->string('marital_status');
            $table->string('birth_place');
            $table->boolean('is_regular');
            $table->string('address');
            $table->string('image');
            $table->string('nationality');
            $table->string('emergency_name');
            $table->string('emergency_relationship');
            $table->string('emergency_contact');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
