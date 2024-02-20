
install composer:
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04su
 
========== laravel porject ===========

export NODE_OPTIONS=--openssl-legacy-provider

composer create-project laravel/laravel blog "8.*"

composer create-project --prefer-dist laravel/laravel blog "8cl.*"

composer require laravel/ui:^3.0

php artisan ui vue

edit "package.json" file

----------- error storag permition ------

sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache

chmod -R 775 storage
chmod -R 775 bootstrap/cache


----- code for artisan --------------

php artisan config:cache          // wher edit .env file

php artisan storage:link

php artisan migrate
php artisan migrate:status
php artisan migrate:fresh

php artisan make:migration create_nameTable_table
php artisan make:migration add_column_columnName_in_tableName 

php artisan migrate:refresh --path=/database/migrations/fileName.php  // refresh special table

php artisan make:model Product
php artisan make:model Product -m   creat migrat and model

php artisan make:controller ProductController


=========== switch version php ===========

apt install php8.2 php8.2-cli php8.2-curl php8.2-xml

sudo update-alternatives --set phar /usr/bin/php5.6




@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

// show all errors
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif



// show error alert
@error('tilte')
  <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
@enderror


