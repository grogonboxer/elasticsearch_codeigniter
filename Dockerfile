FROM dpjia/php:2018
COPY . /www/
WORKDIR /www
RUN /usr/local/php/bin/php composer.phar install && chmod 777 -R application/logs/
CMD ["/usr/local/apache/bin/apachectl", "-k","start","-DFOREGROUND"]
