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
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->integer('pieces');
            $table->timestamps();
        });

        Book::create([
            'author' => 'petya',
            'title' => 'kuka',
            'pieces' => 1
        ]);

        Book::create([
            'author' => 'petyus',
            'title' => 'kukabuvar',
            'pieces' => 2
        ]);

        Book::create([
            'author' => 'pety',
            'title' => 'kukas',
            'pieces' => 3
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
