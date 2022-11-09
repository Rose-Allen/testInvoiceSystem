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
        Schema::create('clentcontracts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file');
            $table->date('date_contract');

            $table->unsignedBigInteger("client_id")->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("client_id", "contracts_client_fk")->on("clients")->references("id")->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clentcontracts');
    }
};
