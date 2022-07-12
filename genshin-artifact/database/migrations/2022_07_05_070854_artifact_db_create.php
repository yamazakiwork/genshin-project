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
        Schema::create('artifacts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->timestamp('email_verified_at')->nullable();
            #メインステータス
            $table->string('main_status_name');
            $table->double('main_status');
            #会心率
            $table->double('crit_rate');
            #会心ダメージ
            $table->double('crit_dmg');
            #攻撃力パーセント
            $table->double('atk_per');
            #攻撃力実数値
            $table->integer('atk');
            #防御力パーセント
            $table->double('def_per');
            #防御力実数値
            $table->integer('def');
            #HPパーセント
            $table->double('HP_per');
            #HP実数値
            $table->integer('HP');
            #元素熟知
            $table->integer('elemental_mastery');
            #元素チャージ効率
            $table->double('energy_recharge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
