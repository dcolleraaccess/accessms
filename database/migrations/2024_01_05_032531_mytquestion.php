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
        Schema::create('mytquestion',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('q1')->nullable();
            $table->longText('q2')->nullable();
            $table->longText('q3')->nullable();
            $table->longText('q4')->nullable();
            $table->longText('q5')->nullable();
            $table->longText('q6')->nullable();
            $table->longText('q7')->nullable();
            $table->longText('q8')->nullable();
            $table->longText('q9')->nullable();
            $table->longText('q10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mytquestion');
    }
};
