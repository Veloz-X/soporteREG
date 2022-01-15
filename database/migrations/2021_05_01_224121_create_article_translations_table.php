<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( ! Schema::hasTable('article_translations') ) {
            Schema::create('article_translations', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedInteger('article_id')->nullable();
                $table->text('title')->nullable();
                $table->text('content')->nullable();
                $table->string('language')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_translations');
    }
}
