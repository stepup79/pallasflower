# project pallasflower
Đồ án website thương mại điện tử shop Hoa tươi Pallas

# Hướng dẫn cách sử dụng dự án
## Step 1: Clone source dự án
Thực thi câu lệnh sau:
```
git clone https://github.com/stepup79/pallasflower.git
```

Tải thư mục public bỏ vào đường dẫn pallas/storage/app/
https://drive.google.com/file/d/17uLp0b8Ln8QUlejPF7MVXFMy8eKCG6Ps/view?usp=sharing

Để lấy hình ảnh từ public
Mở cmd từ thư mục dự án chạy lệnh: php artisan storage:link

Tải thư mục vendor bỏ vào đường dẫn pallas/
https://drive.google.com/file/d/1UBxiDbMWw90ImmMTC6fVI7yy7OR-B6CL/view?usp=sharing

## Step 2: Khởi tạo, kết nối database
Hiệu chỉnh file .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homepallas
DB_USERNAME=root
DB_PASSWORD=
```

## Step 3: Tạo database, thực hiện migrate
- Sử dụng công cụ heidisql cấu hình nhẹ, dễ sử dụng
- Tạo database homepallas, chuẩn bảng mã `utf8mb4_unicode_ci`
- Thực thi câu lệnh khởi tạo cấu trúc bảng
```
php artisan migrate
```

## Step 4: tạo dữ liệu mẫu
- Thực thi câu lệnh
```
php artisan db:seed
```

## Step 5: chạy server
- Thực thi câu lệnh:
```
php artisan serve
```

## Step 6: thông tin tài khoản truy cập hệ thống
Tài khoản Admin:
admin / 123456

