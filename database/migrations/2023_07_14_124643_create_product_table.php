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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("type"); /*Brik/ciment/paint*/
            $table->string("brand");/*lanwa/sanstha/tokyo ciment/sinha ciment*/
            $table->string("SLS certifired or not");/*yes/no*/
            $table->float("one pice price (Rs)");/*25.00*/
            $table->float("Discount");/*yes/no*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
