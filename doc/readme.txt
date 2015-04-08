Bookpace:
requirements:
Apache, PHP

Testing:
Ubuntu 14.04

server-side: 
	PHP Slim micro-freamwork  - /api/vendor

Client-side :
	angularjs - /ui/lib/angularjs   url : https://angularjs.org/
	bootsrap - /ui/lib/bootsrap     url : http://getbootstrap.com/


Slim installation.
1. curl -s https://getcomposer.org/installer | php 
2. create file composer.json
3. add 
{
    "require": {
        "slim/slim": "2.*"
    }
}
4. php composer.phar install

Apache config:
1. create files /etc/apache2/sites-enabled/bookpace.geros.conf
<VirtualHost *:80>
    ServerAdmin me@mysite.com
    DocumentRoot "/var/www/bookpace/"
    ServerName bookpace.geros
    ServerAlias bookpace.geros

    #ErrorLog "logs/mysite.com-error.log"
    #CustomLog "logs/mysite.com-access.log" combined

    <Directory "/var/www/bookpace/">
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
2. sudo a2ensite bookpace.geros.conf
3. sudo /etc/init.d/apache2 restart
