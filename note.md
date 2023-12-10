# Xây dựng chức năng đăng nhập trên 1 thiết bị

## Bước 1: Xây dựng Autentication

```shell
composer require laravel/ui
php artisan ui bootstrap --auth
```

## Bước 2: Phân tích Database

## Bước 3: Xây dựng Middleware

# Xây dựng chức năng xác minh 2 bước qua OTP

==> Gửi mã OTP qua email

## Bước 1: Thiết lập thông báo qua email

-   Tạo notification
-   Tạo OTP khi đăng nhập
-   Gửi OTP qua email

## Bước 2: Xây dựng form để user nhập OTP

-   Hiển thị sau khi xác thực thành công (Nhập đúng email và password)
-   Khi user nhập OTP ==> Kiểm tra OTP

*   Thành công --> Xử lý đăng nhập
*   Thất bại --> Thông báo lỗi
