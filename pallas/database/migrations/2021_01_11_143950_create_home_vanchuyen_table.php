<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeVanchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_vanchuyen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->tinyIncrements('vc_id')->comment('ID dịch vụ giao hàng');
            $table->string('vc_ten', 50)->comment('Tên dịch vụ # Tên dịch vụ giao hàng');
            $table->unsignedInteger('vc_chiPhi')->default('0')->comment('Phí giao hàng # Phí giao hàng');
            $table->text('vc_dienGiai')->comment('Thông tin # Thông tin về dịch vụ giao hàng');
            $table->timestamp('vc_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo dịch vụ giao hàng');
            $table->timestamp('vc_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật dịch vụ giao hàng gần nhất');
            $table->unsignedTinyInteger('vc_trangThai')->default('2')->comment('Trạng thái # Trạng thái dịch vụ giao hàng: 1-khóa, 2-hiển thị');
        
            $table->unique(['vc_ten']);
        });
        DB::statement("ALTER TABLE `home_vanchuyen` comment 'Dịch vụ giao hàng # Dịch vụ giao hàng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_vanchuyen');
    }
}
