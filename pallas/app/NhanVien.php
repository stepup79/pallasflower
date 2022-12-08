<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class NhanVien extends Model implements AuthenticatableContract
{
    const     CREATED_AT    = 'nv_taoMoi';
    const     UPDATED_AT    = 'nv_capNhat';

    protected $table        = 'home_nhanvien';
    protected $fillable     = ['nv_taiKhoan', 'nv_matKhau', 'nv_hoTen', 'nv_gioiTinh', 'nv_email', 'nv_ngaySinh', 'nv_diaChi', 'nv_dienThoai', 'nv_taoMoi', 'nv_capNhat', 'nv_trangThai', 'q_id'];
    protected $guarded      = ['nv_id'];

    protected $primaryKey   = 'nv_id';

    protected $dates        = ['nv_ngaySinh', 'nv_taoMoi', 'nv_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function donhangNhanvien () {
        return $this->hasMany('App\DonHang', 'nv_id', 'nv_id');
    }
    public function quyenNhanvien () {
        return $this->belongsTo('App\Quyen', 'q_id', 'q_id');
    }

    /**
     * Tên cột 'Ghi nhớ đăng nhập'
     * The column name of the "remember me" token.
     *
     * @var string
     */
    protected $rememberTokenName = 'nv_ghinhodangnhap';
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return $this->getKeyName();
    }
    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }
    /**
     * Hàm trả về tên cột dùng để tim `Mật khẩu`
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->nv_matKhau;
    }
    /**
     * Hàm dùng để trả về giá trị của cột "nv_ghinhodangnhap" session.
     * Get the token value for the "remember me" session.
     *
     * @return string|null
     */
    public function getRememberToken()
    {
        if (! empty($this->getRememberTokenName())) {
            return (string) $this->{$this->getRememberTokenName()};
        }
    }
    /**
     * Hàm dùng để set giá trị cho cột "nv_ghinhodangnhap" session.
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        if (! empty($this->getRememberTokenName())) {
            $this->{$this->getRememberTokenName()} = $value;
        }
    }
    /**
     * Hàm trả về tên cột dùng để chứa REMEMBER TOKEN
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return $this->rememberTokenName;
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['nv_matKhau'] = bcrypt($value);
    }
}
