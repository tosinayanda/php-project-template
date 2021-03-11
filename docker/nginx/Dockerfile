FROM nginx:latest

# COPY . /app

RUN ls -lha /

COPY . /app

COPY ./config/default.conf /etc/nginx/conf.d/default.conf

COPY ./config/default.conf /usr/local/etc/nginx/conf.d/default.conf

RUN ls -lha /etc/nginx/conf.d

RUN ls -lha /usr/share/nginx/html

EXPOSE 80