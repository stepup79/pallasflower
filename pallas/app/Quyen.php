<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quyen extends Model
{
    const     CREATED_AT    = 'q_taoMoi';
    const     UPDATED_AT    = 'q_capNhat';

    protected $table        = 'home_quyen';
    protected $fillable     = ['q_ten', 'q_dienGiai', 'q_taoMoi', 'q_capNhat', 'q_trangThai'];
    protected $guarded      = ['q_id'];

    protected $primaryKey   = 'q_id';

    protected $dates        = ['q_taoMoi', 'q_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function nhanvienQuyen () {
        return $this->hasMany('App\NhanVien', 'q_id', 'q_id');
    }
}
