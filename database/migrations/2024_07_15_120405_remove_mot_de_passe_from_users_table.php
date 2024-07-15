<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveMotDePasseFromUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('mot_de_passe');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mot_de_passe');
        });
    }
}