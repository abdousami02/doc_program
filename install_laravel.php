@if
@endif

@csrf


ssh badnjhvi@66.29.141.209 -p 21098

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
========== v hosts ===========
 /etc/hosts
 /opt/lampp/etc/extra/httpd-vhosts.conf

******* Apache **************
127.0.0.1       shop_local
127.0.0.1       badnitech_localgt
127.0.0.1       test1_local
127.0.0.1       badnishop_local
192.168.8.101   badnishop_local
127.0.0.1       admin.badnishop_local


***** XAMPP ************
	How to setup a Virtual Host locally with XAMPP in Ubuntu:
			https://ourcodeworld.com/articles/read/302/how-to-setup-a-virtual-host-locally-with-xampp-in-ubuntu	
			
	1. Allow the usage of custom virtual hosts:
		sudo nano /opt/lampp/etc/httpd.conf				// in line 467
			# Virtual hosts
			Include etc/extra/httpd-vhosts.conf
			
	2. Create a custom domain in the hosts file of your system:
		sudo nano /etc/hosts

	3. Create your first virtual host
		sudo nano /opt/lampp/etc/extra/httpd-vhosts.conf


	<VirtualHost 127.0.0.1:80>
	  DocumentRoot "/opt/lampp/htdocs/my-first-project"
	  DirectoryIndex index.php

	  <Directory "/opt/lampp/htdocs/my-first-project">
		Options All
		AllowOverride All
		Require all granted
	  </Directory>
	</VirtualHost>
		
		
 
========== laravel porject ===========
export NODE_OPTIONS=--openssl-legacy-provider

composer create-project laravel/laravel blog "8.*"

composer create-project --prefer-dist laravel/laravel blog "8cl.*"

composer require laravel/ui:^3.0

php artisan ui vue

edit "package.json" file

"devDependencies": {
        "@popperjs/core": "^2.10.2",
        "axios": "^0.21",
        "bootstrap": "^5.2.3",
        "laravel-mix": "^6.0.6",
        "lodash": "^4.17.19",
        "postcss": "^8.1.14",
        "resolve-url-loader": "^3.1.2",
        "sass": "^1.32.11",
        "sass-loader": "^11.0.1",
        "vue": "^3.2.36",
        "vue-template-compiler": "^2.7.10",
        "vue-router": "^4.1.6",
        "vuex": "^4.0.0"
    }
	
npm install
npm run dev

date("Y-m-d H:i:s");


----- code for artisan --------------

php artisan config:cache					// wher edit .env file

php artisan storage:link

php artisan make:migration create_nameTable_table
php artisan migrate
php artisan migrate:status
php artisan migrate:fresh

php artisan make:migration add_column_columnName --tableName		// edit column 2023_02_23_085554_create_order_table

php artisan migrate:refresh --path=/database/migrations/fileName.php	// refresh special table

php artisan make:model Product
php artisan make:model Product -m		creat migrat and model

php artisan make:controller ProductController


$method_qte = ( $data->method_price == 'unite') ? $data->qte_uc : 1 ;

calc_price(prod, method){
  if(method == "unite"){
	return (prod.price_sell1 / (prod.qte_uc / prod.method_qte)).toFixed(2);

  }else if(method == "cartone"){
	return (prod.price_sell1 * prod.method_qte).toFixed(2);

  }else if(method == "total"){
	let total = prod.price_sell1 * prod.method_qte * prod.order_qte || 0;
	prod.order_total = total;
	return total.toFixed(2);
  }
},
	
-------- model DataBase --------

 $data = NameModel::
					all();						// select and get all
					get()							// get all
					create(['col1' => val, 'col2' => val])
					select('col1', 'col2')->get()
					find()							// 
					where('col', val)->update('col', val)
					
					

------- install apache & MySQL -----------

apt install apache2 php libapache2-mod-php php-mysql mysql-server phpmyadmin

mysql_secure_installation
	= if error run cond in mysql
		ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'YOUR_PASSWORD';

romve anonymous user 		-> yes
login remootely 			-> no
remove test database 		-> yes
reloade privilege tables 	-> yes

enter to mysql:
	mysql -u root -p
	CREAT USER 'admin'@'localhost' IDENTIFIED BY 'mypwd';
	GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;
	FLUSH PRIVILEGES

