FROM mysql:5.7

#criando senha do root
ENV MYSQL_ROOT_PASSWORD=root
#ENV MYSQL_ROOT_PASSWORD=${DB_ROOT_PASSWORD}

#copiando arquivo init.sql
COPY ./initdb.sql /docker-entrypoint-initdb.d/