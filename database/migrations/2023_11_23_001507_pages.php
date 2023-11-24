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
        // if(!Schema::hasTable('pages')){
            Schema::create('pages', function (Blueprint $table) {
                $table->id();
                $table->string('navbar', 50);
                $table->mediumtext('body');
                $table->string('url');
                $table->boolean('allow_comments');
                }
            );
        // }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
