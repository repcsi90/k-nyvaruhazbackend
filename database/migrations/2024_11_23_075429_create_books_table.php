<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->string('title');
            $table->string('author');
            $table->integer('price');
            $table->timestamps();
        });
        
        Book::create([
            'title'=>'Kezdő hackerek kézikönyve',
            'author'=>'Fehér Krisztián',
            'price'=> 3000
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
