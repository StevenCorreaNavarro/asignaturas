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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo');
            
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->foreign('subject_id')
            ->references('id')
            ->on('subjects')
            ->onDelete('cascade')
            ->unUpdate('cascade');

            $table->unsignedBigInteger('teacher_id')->nullable();;
            $table->foreign('teacher_id')
            ->references('id')
            ->on('teachers')
            ->onDelete('cascade')
            ->unUpdate('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
