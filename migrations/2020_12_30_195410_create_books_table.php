<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->integer("kind_id");
                $table->String("kind_name");
                $table->integer("category_id");
                $table->integer("category_name");
                $table->String("book_name");
                $table->string('author', 100)->index('index_author')->comment('作者・筆者');
                $table->integer('price')->comment('価格');
                $table->integer('stocks')->index('index_stocks')->comment('在庫数');
                $table->integer('order')->comment('発注数');
                $table->timestamp('release_dt')->comment('発売日');
                $table->integer('day1')->comment('day1');
                $table->integer('day2')->comment('day2');
                $table->integer('day3')->comment('day3');
                $table->integer('day4')->comment('day4');
                $table->integer('day5')->comment('day5');
                $table->integer('day6')->comment('day6');
                $table->integer('day7')->comment('day7');
                $table->integer('day8')->comment('day8');
                $table->integer('day9')->comment('day9');
                $table->integer('day10')->comment('day10');
                $table->integer('day11')->comment('day11');
                $table->integer('day12')->comment('day12');
                $table->integer('day13')->comment('day13');
                $table->integer('day14')->comment('day14');
                $table->integer('day15')->comment('day15');
                $table->integer('day16')->comment('day16');
                $table->integer('day17')->comment('day17');
                $table->integer('day18')->comment('day18');
                $table->integer('day19')->comment('day19');
                $table->integer('day20')->comment('day20');
                $table->softDeletes();
                $table->timestamps();
                $table->foreign('category_id') // このテーブルの外部キー列
                ->references('id') // 参照先テーブルの ID 列
                ->on('categories') // 参照先テーブル
                ->onDelete('restrict');
        });
           
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}









