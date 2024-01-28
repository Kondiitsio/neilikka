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
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        //Insert some categories
        DB::table('categories')->insert([
            ['name' => 'Sisäkasvit'],
            ['name' => 'Ulkokasvit'],
            ['name' => 'Työkalut'],
            ['name' => 'Kasvien hoito'],
            // Add more categories as needed
        ]);

        // Get the first product and category
        // $product = DB::table('products')->first();
        // $category = DB::table('categories')->first();

        // Insert into pivot table
        // DB::table('category_product')->insert([
        //     'product_id' => $product->id,
        //     'category_id' => $category->id,
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_product');
    }
};
