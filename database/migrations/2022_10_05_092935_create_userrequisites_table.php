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
        Schema::create('userrequisites', function (Blueprint $table) {
            $table->id();
            $table->string('title_bank');
            $table->string('iik')->nullable();
            $table->string('bik')->nullable();
            $table->integer('kbe')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("user_id", "requisite_user_fk")->on("users")->references("id")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userrequisites');
    }
};
