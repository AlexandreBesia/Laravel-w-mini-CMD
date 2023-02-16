<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editors', function (Blueprint $table) {
            $table->id();
            $table->string("page_name")->nullable();
            $table->integer("bloc_id")->nullable();
            $table->integer("size_of_bloc")->nullable();
            $table->integer("index_column")->nullable();
            $table->integer("index_row")->nullable();
            $table->longText("content_of_bloc")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editors');
    }
};
