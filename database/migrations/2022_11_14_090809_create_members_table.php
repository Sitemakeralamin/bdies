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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('nationality');
            $table->string('mobile');
            $table->string('email');
            $table->string('date_of_birth');
            $table->string('applicant_date');
            $table->string('present_address');
            $table->string('member_type');
            $table->string('telephone')->nullable();
            $table->string('res')->nullable();
            $table->string('malling_address')->nullable();
            $table->string('degree')->nullable();
            $table->string('university')->nullable();
            $table->string('year')->nullable();
            $table->string('position')->nullable();
            $table->string('organization')->nullable();
            $table->string('service_year')->nullable();
            $table->string('job_nature')->nullable();
            $table->string('bodies')->nullable();
            $table->text('publication_file')->nullable();
            $table->text('signature_file')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('members');
    }
};
