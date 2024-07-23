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
        Schema::create('clasroom_subject', function (Blueprint $table) {
            $table->id();
            $table->string('dia')->nullable();
            $table->string('mes')->nullable();
            $table->string('nota')->nullable();
            
            $table->unsignedBigInteger('clasroom_id')->nullable();;
            $table->foreign('clasroom_id')
            ->references('id')
            ->on('clasrooms')
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
        Schema::dropIfExists('clasroom_subject');
    }
};
