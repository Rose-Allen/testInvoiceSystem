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
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
//            $table->integer('invoice_number')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('address_id')->nullable();
            $table->unsignedBigInteger('contract_client_id')->nullable();
            $table->unsignedBigInteger('requisites_client_id')->nullable();
            $table->unsignedBigInteger('status')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->dateTime('data_check')->nullable();
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->integer('sum')->nullable();
            $table->unsignedBigInteger('requisites_user_id')->nullable();
            $table->timestamps();


            $table->foreign("user_id", "check_user_fk")->on("users")->references("id")->onDelete('cascade');
            $table->foreign("client_id", "check_client_fk")->on("clients")->references("id")->onDelete('cascade');
            $table->foreign("address_id", "check_address_fk")->on("addresses")->references("id")->onDelete('cascade');
            $table->foreign("contract_client_id", "check_contract_fk")->on("clentcontracts")->references("id")->onDelete('cascade');
            $table->foreign("status", "check_status_fk")->on("statuses")->references("id")->onDelete('cascade');
            $table->foreign("currency_id", "check_currency_fk")->on("currencies")->references("id")->onDelete('cascade');
            $table->foreign("product_id", "check_product_fk")->on("products")->references("id")->onDelete('cascade');
            $table->foreign("requisites_client_id", "requisites_currency_fk")->on("clientrequisites")->references("id")->onDelete('cascade');
            $table->foreign("requisites_user_id", "requisites_user_check_fk")->on("userrequisites")->references("id")->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checks');
    }
};
