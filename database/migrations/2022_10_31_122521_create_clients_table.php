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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("last_name");
            $table->string("first_name");
            $table->string("phone_number");
            $table->string("email");
            $table->date("birth_date");
            $table->longText("type_of_service")->nullable();
            $table->longText("duration_and_date_of_consultation")->nullable();
            $table->date("due_date")->nullable();
            $table->longText("personal_note")->nullable();
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
        Schema::dropIfExists('clients');
    }
};
