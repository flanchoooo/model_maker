<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenueProjectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenue_projections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('co_id')->nullable()->length(36);
            $table->string('zfc')->nullable()->length(36);
            $table->string('ominia')->nullable()->length(36);
            $table->string('command')->nullable()->length(36);
            $table->string('pres_input_scheme')->nullable()->length(36);
            $table->string('selling_price')->nullable()->length(36);
            $table->string('total_inputs')->nullable()->length(36);
            $table->string('revenue')->nullable()->length(36);
            $table->string('month')->nullable()->length(36);
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
        Schema::dropIfExists('revenue_projections');
    }
}
