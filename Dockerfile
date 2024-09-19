#PHP Apache 
FROM php:7.2-apache

# Actualizar la lista de actualizaciones  
RUN apt-get update

# Actualizar la imagen 
RUN apt-get upgrade -y

COPY ./app /var/www/html/

# Expone el puerto 80
EXPOSE 80

# Iniciar el servidor Apache
CMD ["apache2-foreground"]
