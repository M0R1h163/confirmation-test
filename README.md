Docker ビルド
1. git clone git@github.com:coachtech-material/laravel-docker-template.git
2. docker-compose up -d --build

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envファイルを作成
4. php artisan key:generate
5. php artisan migrate

使用技術
・mysql:8.0.26

URL
・開発環境 :http://localhost/
・phpMyAdmin :http://localhost:8080
