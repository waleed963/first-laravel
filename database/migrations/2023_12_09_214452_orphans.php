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
        Schema::create('orphans', function (Blueprint $table) {
            $table->id();
            $table->string('orphan-name');
            $table->string('guardian-name');
            $table-> usignedBigInteger('sponsor-id'); $tabel->foreign('sponsor-id')->references('id')->on('sponsors');
            $table->date('date');
            $table->integer('amount');
            $table->integer('card-id');
            $table->date('last-damount');
            $table->integer('phonenumber');
            $table->longText('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
