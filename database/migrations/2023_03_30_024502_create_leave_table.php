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

    Schema::create('positions', function (Blueprint $table) {
        $table->id();
        $table->string('position_name', 30);
        $table->timestamps();
    });

    Schema::create('employee', function (Blueprint $table) {
        $table->id();
        $table->string('first_name', 30);
        $table->string('last_name', 30);
        $table->unsignedBigInteger('position_id');
        $table->foreign('position_id')->references('id')->on('positions');
        $table->timestamps();
    });

    Schema::create('leave', function (Blueprint $table) {
        $table->id();
        $table->datetime('starts_date');
        $table->datetime('end_date');
        $table->string('comment', 255)->nullable();
        $table->string('reason', 255)->nullable();
        $table->binary('image')->nullable();
        $table->unsignedBigInteger('leavetype_id');
        $table->foreign('leavetype_id')->references('id')->on('leavetype');
        $table->unsignedBigInteger('employee_id');
        $table->foreign('employee_id')->references('id')->on('employee');
        $table->timestamps();
    });    
}

public function down(): void
{
    Schema::dropIfExists('leave');
    Schema::dropIfExists('employee');
    Schema::dropIfExists('positions');
    Schema::dropIfExists('leavetype');
}
};
