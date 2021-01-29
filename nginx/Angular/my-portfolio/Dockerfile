FROM node:12.18.2 as build-stage
WORKDIR /var/www/html
COPY ./package*.json /var/www/html/
RUN npm install
COPY ./ /var/www/html/
ARG configuration=production
RUN npm run build -- --output-path=./dist/out --configuration $configuration
