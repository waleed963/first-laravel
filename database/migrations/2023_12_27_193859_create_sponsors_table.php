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
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('sponsor-name');
            $table-> usignedBigInteger('orphan-id'); $tabel->foreign('orphan-id')->references('id')->on('orphans');
            $table->date('slast-damount');
            $table->integer('samount');
            $table->integer('sphonenumber');
            $table->date('from-date');
            $table->date('to-date');
            $table->longText('snote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsors');
    }
};
