# Laravle12

## 1. Đồ Án Hệ Thống Nộp Bài Thi Trên Máy

```bash
# Copy file môi trường DOANLARAVEL12/backend/
cp .env.local.example .env.local

# Build và chạy Docker DOANLARAVEL12/
docker-compose up -d --build

# Chạy migrate và seed DOANLARAVEL12/backend/
php artisan migrate:fresh --seed

# Tạo app key
php artisan key:generate

```
## 2. Chạy 3 Cổng
# phpmyadmin: http://localhost:8080/
# frontend: http://localhost:5173/
# backend: http://localhost:8000/


