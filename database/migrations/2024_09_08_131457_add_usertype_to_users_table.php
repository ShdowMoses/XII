<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('users', 'usertype')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('usertype')->default('user')->after('email');
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'usertype')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('usertype');
            });
        }
    }
};