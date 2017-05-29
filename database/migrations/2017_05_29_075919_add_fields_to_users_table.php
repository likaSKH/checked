<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->string('lname');
            $table->date('birthDate');
            $table->string('phone');
            $table->string('position');
            $table->string('city');
            $table->string('country');
            $table->boolean('juridical');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn('lname');
            $table->dropColumn('birthDate');
            $table->dropColumn('phone');
            $table->dropColumn('position');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('juridical');
        });
    }
}
