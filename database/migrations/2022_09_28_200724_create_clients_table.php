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
            $table->string('bin');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->unsignedBigInteger("user_id")->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("user_id", "counterparties_user_fk")->on("users")->references("id");
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
