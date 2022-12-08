<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class ThanhtoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('Asia/Ho_Chi_Minh');

        $list = [
            [
                'tt_ten'      => "Tiền mặt",
                'tt_dienGiai' => "Quý khách thanh toán trực tiếp tại cửa hàng.",
                'tt_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'tt_capNhat'  => $today->format('Y-m-d H:i:s')
            ], 
            [
                'tt_ten'      => "Thanh toán khi nhận hàng",
                'tt_dienGiai' => "Nhân viên của chúng tôi sẽ liên lạc với Quý khách để nhận thông tin về địa chỉ và thời gian giao hàng. Nhân viên của chúng tôi sẽ đến giao hàng và nhận tiền sau khi Quý khách đã nhận và kiểm tra hàng.",
                'tt_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'tt_capNhat'  => $today->format('Y-m-d H:i:s')
            ], 
            [
                'tt_ten'      => "Chuyển khoản ngân hàng",
                'tt_dienGiai' => "Quý khách có thể đến bất kì Phòng giao dịch ngân hàng, ATM hoặc sử dụng tính năng Internet Banking để chuyển tiền. Lưu ý: Sau khi thanh toán, Quý khách cần thông báo lại cho chúng tôi thông tin chuyển khoản của Quý khách bao gồm: Tên người chuyển và số điện thoại hoặc nội dung chuyển khoản để chúng tôi kiểm tra thông tin.",
                'tt_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'tt_capNhat'  => $today->format('Y-m-d H:i:s')
            ],
            [
                'tt_ten'      => "Ví điện tử VinID, Moca, VNPay",
                'tt_dienGiai' => "Thanh toán tại cửa hàng bằng ví điện tử.",
                'tt_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'tt_capNhat'  => $today->format('Y-m-d H:i:s')
            ],
        ];
        DB::table('home_thanhtoan')->insert($list);
    }
}
