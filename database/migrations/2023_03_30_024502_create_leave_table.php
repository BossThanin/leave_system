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
    Schema::create('leavetype', function (Blueprint $table) {
        $table->id();
        $table->string('leavetype_name', 50);
        $table->timestamps();
    });

    Schema::create('position', function (Blueprint $table) {
        $table->id();
        $table->string('position_name', 30);
        $table->timestamps();
    });

    Schema::create('employee', function (Blueprint $table) {
        $table->id();
        $table->string('first_name', 30);
        $table->string('last_name', 30);
        $table->unsignedBigInteger('position_id');
        $table->foreign('position_id')->references('id')->on('position');
        $table->timestamps();
    });

    Schema::create('leave', function (Blueprint $table) {
        $table->id();
        $table->date('starts_date');
        $table->date('end_date');
        $table->string('comment', 255);
        $table->binary('image');
        $table->unsignedBigInteger('leavetype_id');
        $table->foreign('leavetype_id')->references('id')->on('leavetype');
        $table->unsignedBigInteger('employee_id');
        $table->foreign('employee_id')->references('id')->on('employee');
        $table->timestamps();
    });

    Schema::create('time', function (Blueprint $table) {
        $table->id();
        $table->time('start_time');
        $table->time('end_time');
        $table->unsignedBigInteger('leave_id');
        $table->foreign('leave_id')->references('id')->on('leave');
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('time');
    Schema::dropIfExists('leave');
    Schema::dropIfExists('employee');
    Schema::dropIfExists('position');
    Schema::dropIfExists('leavetype');
}
};
