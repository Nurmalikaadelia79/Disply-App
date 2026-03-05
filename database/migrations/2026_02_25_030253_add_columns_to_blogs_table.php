<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('subtitle')->nullable()->after('title');
            $table->text('meta_description')->nullable()->after('content');
            $table->text('meta_keywords')->nullable()->after('meta_description');
            $table->string('image')->nullable()->after('meta_keywords');
            $table->string('slug')->unique()->after('id');
        });
    }

    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['subtitle', 'meta_description', 'meta_keywords', 'image', 'slug']);
        });
    }
};