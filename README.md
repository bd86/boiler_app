PHP Boiler Plate App
==========

##Instructions

1. Upload file to your directory  
2. SSH into directory and run `curl -sS https://getcomposer.org/installer | php`    
3. Run `php composer.phar install` to download the packages 
4. Optional(If using this in a sub directory)
    * Edit /vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Request.php
    * Replace with the code here: fdf73548ebd385240f3e1cc2f341b22f74932ea7
    * Set htaccess.txt 

##Packages

These are set in the composer.json file.   

You can search for more packages [here](https://packagist.org/)  
Or in the directory run `php composer.phar search`

* [Silex](http://silex.sensiolabs.org/documentation/)
    * A php microframework based on Symfony2
* [Twig](http://twig.sensiolabs.org/documentation/)
    * Twig is a simple templating language
