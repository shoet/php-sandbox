FROM arm64v8/php:8.0-apache

# PHPの必要な拡張機能をインストールする
RUN docker-php-ext-install pdo pdo_mysql

# Apacheのmod_rewriteを有効にする
RUN a2enmod rewrite

# CodeIgniterの.htaccessを使用できるようにApacheの設定を調整する
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# 作業ディレクトリを設定する
WORKDIR /var/www/html

# composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ソースコードをコピーする（ローカルのCodeIgniterプロジェクトディレクトリからコピー）
# .dockerignoreで無視するべきものは定義しておく
COPY . /var/www/html/

# 必要な場合はComposerを使用してPHP依存関係をインストール
# RUN composer install

# コンテナのポート80を外部に公開する
EXPOSE 80

