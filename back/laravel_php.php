<?php

======= websit exp =========

diffrent with with(), has(), whereHas(): https://stackoverflow.com/questions/30231862/laravel-eloquent-has-with-wherehas-what-do-they-mean



	
-------- model DataBase --------

 $data = NameModel::
					all();						// select and get all
					get()							// get all
					create(['col1' => val, 'col2' => val])
					select('col1', 'col2')->get()
					find()							// 
					where('col', val)->update('col', val)
					
					

// validate request and return error if fail
$req->validate([
  'title' => 'required | string ',
  'date'  => 'required | date',
  'location'  => 'required | string',
  'description'=> 'required | string',
]);


// return session key and value
retrun back()->with('success', 'message')


// get session key and value
@if(session('success'))
@endif


cronjobs



========= change lang ==========
set Franch Time:

    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    dd(utf8_encode(strftime('%A %d %B %Y, %H:%M')));


/*
============== Pric of unite and cartone ============
*/
public function calc_price(prod, method){

$method_qte = ( $data->method_price == 'unite') ? $data->qte_uc : 1 ;
 
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

