<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('username');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('email_verified')->default(false);
            $table->boolean('is_newsletter_subscribed')->default(false);
            $table->string('password')->nullable(true);
            $table->string('provider');
            $table->string('last_ip')->nullable(true);
            $table->timestamp('last_login')->nullable(true)->default(now());
            $table->string('login_counts')->nullable(true)->default(1);
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
        Schema::dropIfExists('authors');
    }
}
