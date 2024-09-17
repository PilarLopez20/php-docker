# Descargar la imagen de ubuntu

FROM ubuntu:22.04

#PHP Apache 
FROM php:7.2-apache

# Actualizar la lista de paquetes e instalar actualizaciones
RUN apt-get update && apt-get upgrade -y
COPY ./app /var/www/html/


# Expone el puerto 80
EXPOSE 80

# Iniciar el servidor Apache
CMD ["apache2-foreground"]
