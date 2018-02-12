<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_boards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->comment('用户编号');
            $table->string('username',32)->comment('用户名称');
            $table->string('email',100)->nullable()->comment('邮箱');
            $table->string('mobile',32)->nullable()->comment('手机号');
            $table->text('content')->comment('内容');
            $table->string('user_ip',32)->comment('用户ip');
            $table->string('device')->comment('访问设备信息');
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
        Schema::dropIfExists('message_boards');
    }
}
