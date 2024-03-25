<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_mm');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('nrc_no')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->text('bio')->nullable();
            $table->string('profile')->nullable();
            $table->string('address')->nullable();
            $table->string('address_mm')->nullable();
            $table->unsignedBigInteger('city_id')->index()->default(0);
            $table->string('password');
            $table->string('last_login_ip')->nullable();
            $table->timestamp('login_at')->nullable();
            $table->boolean('trash')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('admin_users');
    }
}
