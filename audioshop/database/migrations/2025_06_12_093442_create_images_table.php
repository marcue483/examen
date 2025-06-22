<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->timestamps();
        });

        DB::table('images')->insert([
        ['filename' => 'gal1.png'],
        ['filename' => 'gal2.png'],
        ['filename' => 'gal3.png'],
        ['filename' => 'gal4.png'],
        ['filename' => 'gal5.png'],
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
