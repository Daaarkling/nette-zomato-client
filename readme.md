# Php Zomato Api Client for Nette
Integration of [Zomato api client](https://github.com/Daaarkling/php-zomato-client) to [Nette](https://nette.org/).

Installation
----------
Just use composer.
```sh
composer require darkling/nette-zomato-client
```

Usage
Add this to your config.neon file
```
extensions:
	zomato: Darkling\ZomatoClient\ZomatoExtension

zomato:
	userKey: 123456qwert
```
From now on you can use ZomatoCliant through dependency injection in your app. Documentation can be found [here](https://github.com/Daaarkling/php-zomato-client).

Licence
----------
New BSD License
