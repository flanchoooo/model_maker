<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raw_materials')->nullable()->length(36);
            $table->string('payroll_fixed')->nullable()->length(36);
            $table->string('payroll_variable')->nullable()->length(36);
            $table->string('repairs')->nullable()->length(36);
            $table->string('electricity')->nullable()->length(36);
            $table->string('insurance')->nullable()->length(36);
            $table->string('water')->nullable()->length(36);
            $table->string('rates')->nullable()->length(36);
            $table->string('security')->nullable()->length(36);
            $table->string('canteen')->nullable()->length(36);
            $table->string('supplies')->nullable()->length(36);
            $table->string('services')->nullable()->length(36);
            $table->string('production_overheads')->nullable()->length(36);
            $table->string('vehicle')->nullable()->length(36);
            $table->string('debt_one')->nullable()->length(36);
            $table->string('debt_two')->nullable()->length(36);
            $table->string('debt_three')->nullable()->length(36);
            $table->string('debt_four')->nullable()->length(36);
            $table->string('total_expenses')->nullable()->length(36);
            $table->string('co_id')->nullable()->length(36);
            $table->string('other')->nullable()->length(36);
            $table->string('safety_health')->nullable()->length(36);
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
        Schema::dropIfExists('expenses');
    }
}
