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
        Schema::create('statenursing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('state');
            $table->string('rntemp');
            $table->string('rnperm');
            $table->string('rnfees');
            $table->text('rnnote');
            $table->text('rnlink');
            $table->string('lpntemp');
            $table->string('lpnperm');
            $table->string('lpnfees');
            $table->text('lpnnote');
            $table->text('lpnlink');
            $table->string('cnatemp');
            $table->string('cnaperm');
            $table->string('cnafees');
            $table->text('cnanote');
            $table->text('cnalink');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statenursing');
    }
};
