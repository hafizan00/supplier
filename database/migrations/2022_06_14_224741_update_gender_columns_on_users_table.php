<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Traits\Database;

return new class extends Migration
{
    use Database\Migration;

    public function up()
    {
        Schema::table($this->getTableName('users'), function (Blueprint $table) {
            $table->string('gender')->nullable()->default('male')->change();
        });
    }
};
