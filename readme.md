## OTG-Gesior - AAC

* Esse site foi disponibilizado como site Official para ser utilizado no projeto OTG-Global, o mesmo receberá sempre atualizações e toda ajuda é bem vinda!
### Requirements:
* [Apache](http://www.apache.org/) with [mod_rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html) enabled + [PHP](http://php.net) Version 5.6 or newer

### Como instalar:
* Clone o Gesior-ACC no GitHub.
git clone --recursive https://github.com/Johncorex/OTG-Gesior.git
* altere a permissão para gravação no /cache.

```bash
sudo chmod -R 777 /var/www/html/cache
```

### Tips and Tricks:
* Este site possui alguns implementos de segurança, aqui você pode usar o apache2 para aplicá-los.
* execute esses comandos para maximizar sua segurança.
````bash
sudo a2enmod headers
sudo a2enmod rewrite 
````

### PHP NEEDS THAT FOLLOWING
```bash
sudo apt-get install php-gd
sudo apt-get install php-curl
```

Verifique se o curl está ativado no arquivo php.ini. Para mim está em /etc/php5/apache2/php.ini, se você não conseguir encontrá-la, essa linha pode estar em /etc/php5/conf.d/curl.ini. Verifique se a linha:
extension=curl.so

now restart apache.:
```bash
sudo /etc/init.d/apache2 restart
```
or
```bash
sudo service apache2 restart
```

### FOR UBUNTU ACCOUNTING PROBLEMS
Se você tiver problemas para se registrar usando o ubuntu ou qualquer outra versão do php em que o site alega ter se registrado, mas não foi feito, basta executar o seguinte comando no seu banco de dados:
```bash
SET GLOBAL sql_mode = '';
```

### CREDITS:
Gesior, Marco Pires and OTG Team