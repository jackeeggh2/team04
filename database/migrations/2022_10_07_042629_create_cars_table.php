 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->integer('id')->unsigned()->comment('編號');
            $table->string('typy',191)->nullable(false)->comment('車型');
            $table->tinyInteger('bid')->unsigned()->nullable(false)->comment('品牌');
            $table->integer('horsepower')->nullable(true)->comment('扭力');
            $table->integer('torque')->nullable(false)->comment('CC數');
            $table->double('money')->unsigned()->nullable(false)->comment('價錢');
            $table->double('variable_s')->unsigned()->nullable(false)->comment('變速系統');
            $table->tinyInteger('seats')->unsigned()->nullable(true)->comment('座位');
            $table->string('nationallty',191)->nullable(false)->comment('國家');
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
        Schema::dropIfExists('cars');
    }
}
