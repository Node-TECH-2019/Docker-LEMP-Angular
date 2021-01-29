FROM nginx:latest

# PHP成果物を Docker 上の Nginx のドキュメントとして扱うためにコピー(デプロイ)
# COPY ../app/ /var/www/php

# ビルドしたAngular成果物を Docker 上の Nginx のドキュメントとして扱うためにコピー(デプロイ)
COPY ./angular/my-portfolio/dist/out/ /var/www/html
