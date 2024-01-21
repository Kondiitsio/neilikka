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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->string('image');
            $table->timestamps();
        });

        // Insert some products
        DB::table('products')->insert([
            ['name' => 'Product 1', 'description' => 'Description 1', 'price' => 100, 'image' => 'image1.jpg'],
            ['name' => 'Product 2', 'description' => 'Description 2', 'price' => 200, 'image' => 'image2.jpg'],
            // Add more products as needed
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
