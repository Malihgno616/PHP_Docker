# Use uma imagem oficial do PHP como base
FROM php:8.2-apache

# Ativa mod_rewrite (caso precise)
RUN a2enmod rewrite

# Copia os arquivos do projeto para o diretório do Apache
COPY . /var/www/html/

# Expõe a porta 80 (padrão do Apache)
EXPOSE 80
