<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( ! Schema::hasTable('customer_purchases') ) {
            Schema::create('customer_purchases', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id')->nullable();
                $table->uuid('purchase_code');
                $table->string('buyer')->nullable();
                $table->double('amount', 8, 2);
                $table->dateTime('sold_at', 0);
                $table->string('license');
                $table->double('support_amount', 8, 2);
                $table->dateTime('supported_until', 0);
                $table->bigInteger('item_id');
                $table->string('item_name');
                $table->timestamps();
                $table->text('item_icon')->nullable();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('customer_purchases');
    }
}
