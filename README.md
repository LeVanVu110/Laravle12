# Laravle12

## 1. Đồ Án Hệ Thống Nộp Bài Thi Trên Máy

```bash
# DOANLARAVEL12/backend/
cp .env.local.example .env.local

# DOANLARAVEL12/
docker-compose up -d --build

# DOANLARAVEL12/backend/
php artisan migrate:fresh --seed

php artisan key:generate


