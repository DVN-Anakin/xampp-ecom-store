## Local Dev and deployment to Heroku
1. Download and install Composer from https://getcomposer.org/ to your PC
1. In project folder create composer.json
2. Install dependecies listed in composer.json> `composer install`
3. Create `root/Procfile` with this content 
```
web: vendor/bin/heroku-php-apache2
```
4. Deploying to Heroku:
```
$ heroku login
$ heroku create
$ git push heroku master
```


