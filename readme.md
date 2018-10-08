# 開発環境
## 構成
VirtualBox + vagrant + ansibleで構成しています。  
vmについてですが下記2つで構成しています
- admin (管理画面用 ここにソースを入れます)
- db (mysqlが入っています)

## 起動方法
- cd ./vm
- vagrant up admin db

## SSHで中に入り環境構築します。下記コマンドを実行
- vargant ssh admin
- cd /var/www/html(Nginxのルートディレクトリ)
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate --seed
 
ここまでやったら、検証画面につながるはずなので下記にアクセス  
`http://192.168.30.20`

## アカウントについて
### vagrant(centOs7)
- user_id: vagrant
- pass: vagrant  
(root切り替えは、`sudo su -`)

### mysql
- user_id: local 
- pass: local
