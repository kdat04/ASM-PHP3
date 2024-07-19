<?php

use App\Models\Category;
use App\Models\Categorys;
use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 225);
            $table->text('short_description');
            $table->text('content_1');
            $table->string('img', 225)->nullable();
            $table->string('img_description')->nullable();
            $table->text('content_2');
            $table->integer('views')->default(0);
            $table->foreignIdFor(Category::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
