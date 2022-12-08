<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_nhacungcap', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->tinyIncrements('ncc_id')->comment('ID nhà cung cấp');
            $table->string('ncc_ten', 50)->comment('Tên nhà cung cấp # Tên nhà cung cấp');
            $table->string('ncc_daiDien', 50)->comment('Đại diện # Người đại diện');
            $table->string('ncc_diaChi', 150)->comment('Địa chỉ # Địa chỉ');
            $table->string('ncc_dienThoai', 11)->comment('Điện thoại # Điện thoại');
            $table->string('ncc_email', 100)->comment('Email # Email');
            $table->timestamp('ncc_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo nhà cung cấp');
            $table->timestamp('ncc_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật nhà cung cấp gần nhất');
            $table->unsignedTinyInteger('ncc_trangThai')->default('2')->comment('Trạng thái # Trạng thái nhà cung cấp: 1-khóa, 2-khả dụng');

            $table->unique(['ncc_ten']);
        });
        DB::statement("ALTER TABLE `home_nhacungcap` comment 'Nhà cung cấp # Nhà cung cấp'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_nhacungcap');
    }
}
