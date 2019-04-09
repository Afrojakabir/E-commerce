
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
              $table->unsignedInteger('user_id');
               $table->string('payment');
               $table->integer('total_price');
               $table->string('status')->default('on process');
               $table->softDeletes();
                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
                
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
