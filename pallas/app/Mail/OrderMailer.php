<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Tạo biến chứa dữ liệu dùng để render email template
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $dh_id = $this->data['donhang']['dh_id'];
        return $this->from(env('MAIL_FROM_ADDRESS', 'thaiduy6995@gmail.com'), env('MAIL_FROM_NAME', 'Pallas'))
            ->subject("Đơn hàng [$dh_id] hoàn tất")
            ->view('emails.order-email')
            ->with('data', $this->data);
    }
}
