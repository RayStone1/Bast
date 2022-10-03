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
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable();
            $table->string('secondname')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->unsignedSmallInteger('addres')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('secondname');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('addres');
        });
    }
};
