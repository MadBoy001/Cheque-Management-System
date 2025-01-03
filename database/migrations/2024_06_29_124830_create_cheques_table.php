<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cheques', function (Blueprint $table) {
            $table->id();
            $table->integer('serialnumber');
            $table->string('clientname');
            $table->string('clientcode');

            // $table->string('bankname');
            // $table->string('branchname');
            // $table->string('accountnumber');

            $table->string('chequeno');
            $table->integer('chequeamount');
            $table->date('chequedate');

            // $table->string('depositorname');
            // $table->string('depositornumber');
            // $table->string('depositoremail');

            $table->enum('datesigned', ['yes', 'no'])->default('no');
            $table->enum('status', ['received', 'returned'])->default('received');
            $table->string('remarks')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cheques');
    }
};
