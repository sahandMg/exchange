<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangeTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trans_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('apiExtraFee')->nullable();
            $table->string('changellyFee')->nullable();
            $table->string('payinExtraId')->nullable();
            $table->string('payoutExtraId')->nullable();
            $table->double('amountExpectedFrom',15,8);
            $table->string('status')->nullable();
            $table->string('refundAddress')->nullable();
            $table->string('refundExtraId')->nullable();
            $table->string('currencyFrom')->nullable();
            $table->string('currencyTo')->nullable();
            $table->string('amountTo')->nullable();
            $table->string('amountExpectedTo')->nullable();
            $table->string('payinAddress')->nullable();
            $table->string('payoutAddress')->nullable();
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
        Schema::dropIfExists('exchange_transactions');
    }
}
