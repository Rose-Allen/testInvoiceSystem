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
        Schema::create('usercontracts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file');
            $table->date('date_contract');

            $table->unsignedBigInteger("user_id")->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("user_id", "contracts_user_fk")->on("users")->references("id")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usercontracts');
    }
};
