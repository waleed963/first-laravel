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
        Schema::create('bailsorphan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orphanname');
            $table->integer('oamount');
            $table->longText('bnote')->nullable();
            $table->string('guardianname');
            $table->integer('cardid');
            $table->date('olastdamount');
            $table->integer('ophonenumber');
            $table->boolean('chekbail')->nullable();
            $table->timestamps();
            $table->unsignedInteger('orphan_id');
            $table->foreign('orphan_id')->references('id')->on('orphans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bailsorphan');
    }
};
