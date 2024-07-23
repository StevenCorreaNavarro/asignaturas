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
        Schema::create('student_subject', function (Blueprint $table) {
            $table->id();
            $table->string('nota')->nullable();
            $table->string('incidencias')->nullable();
            
            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade')
            ->unUpdate('cascade');

            $table->unsignedBigInteger('subject_id')->nullable();;
            $table->foreign('subject_id')
            ->references('id')
            ->on('subjects')
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
        Schema::dropIfExists('student_subject');
    }
};
