<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_credits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('membership_id');
            $table->integer('membership_subscription_id')->nullable();
            $table->decimal('price_paid');
            $table->string('payment_type');
            $table->timestamp('purchased_at');
            $table->timestamp('begins_at')->nullable();
            $table->timestamp('ends_at')->nullable();
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
        Schema::dropIfExists('membership_credits');
    }
}
