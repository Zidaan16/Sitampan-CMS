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
        if(!Schema::hasTable('navbar_items')){
            Schema::create('navbar_items', function (Blueprint $table) {
                $table->id();
                $table->string('name', 50);
                $table->text('content');
                $table->text('url');
                }
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbar_items');
    }
};
