<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedores',function(Blueprint $table){
            $table->dropColumn('e-mail');
            $table->string('email',150)->after('uf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores',function(Blueprint $table){
            $table->string('e-mail',150)->after('uf');
            $table->dropColumn('email');
        });
    }
}
