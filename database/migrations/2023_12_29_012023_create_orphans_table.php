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
            $table->increments('id');
            $table->string('sponsorname');
            $table->integer('sphonenumber');
            $table->date('slastdamount');
            $table->date('fromdate');
            $table->longText('snote');
            $table->string('orphanname');
            $table->date('dateofbirth');
            $table->integer('oamount');
            $table->date('todate');
            $table->longText('onote');
            $table->string('guardianname');
            $table->integer('cardid');
            $table->integer('samount');
            $table->integer('ophonenumber');
            $table->timestamps();
            // $table->unsignedInteger('bail_id');
            // $table->foreign('bail_id')->references('id')->on('bailsorphan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orphans');
    }
};
