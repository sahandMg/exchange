<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixRateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fix_rate_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trans_id');
            $table->float('apiExtraFee')->nullable();
            $table->float('changellyFee');
            $table->string('payinExtraId')->nullable();
            $table->string('payoutExtraId')->nullable();
            $table->string('refundAddress')->nullable();
            $table->double('amountExpectedFrom',15,8);
            $table->double('amountExpectedTo',15,8);
            $table->string('payTill');
            $table->string('status');
            $table->string('currencyFrom');
            $table->string('currencyTo');
            $table->double('amountTo',15,8)->nullable();
            $table->string('payinAddress');
            $table->string('payoutAddress');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('fix_rate_transactions');
    }
}
