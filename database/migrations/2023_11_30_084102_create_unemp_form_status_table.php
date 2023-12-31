<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnempFormStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unemp_form_status', function (Blueprint $table) {
            $table->id();
            $table->string('form_request_id');
            $table->integer('district_approval')->default(1);
            $table->string('district_remarks')->nullable();
            $table->date('district_approval_date')->nullable();
            $table->integer('state_approval')->default(0);
            $table->string('state_remarks')->nullable();
            $table->date('state_approval_date')->nullable();
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
        Schema::dropIfExists('unemp_form_status');
    }
}
