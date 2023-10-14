
<?php
	echo "";	 	// the syntax of PHP
	
?>	

echo | print 		// show the data in page

exit(str|int)		// echo for error

$name								// variabl
define("NAME", Value, Case-Insensitive(bool)); 	// constant should be uppercasesse
const Name = Value								// constant for OOP

$name1 . $name2 	// concatenate whithe variable
$first .= "last"	// the same $first = $first . "last"

gettype()		// get the type of element
var_dump() 		// get the type and length and value of element


Data Type:
	string, intiger, boolean, floating point or (floats, doubles, "real number"), 
	array, null, object, resource
	
----------Constant of Lang PHP:

PHP_INT_MAX



-------- if condition ----------


if( $var1 > $var2 && $var < $var3){
	// code
} elseif(){
	// code
} else{++++
	// code
}


**

switch($str){
	case "string":
		echo "";
		break;

	case "string":
	case "string":
		echo "";
		break;
	
	default:
		echo "";
}


----
==      equal
=== 	identical
!=		not equal
<>		not equal
!==		not identical

and
&&

or
||

xor
^

++$val 		// add (1) befor print
$val++		// add (1) after print

@(//operatop) or die("this is error") 		// don't show the error and show custum message

empty()						// if the content inside it is empty

------- Loop -----

**
for($i = 0; $i < 12; $i++){
	// code
}

**
$i = 0;
for ( ; ; ){
	
	if($i > 12){
		break;		// break the loop
	}
	
	$i++;
}

***

$i = 0;
for ( ; ; ):			// start for loop
	
	if($i > 12){
		break;		// break the loop
	}
	
	$i++;
	
endfor;						// end for loop


**
$i = 1;
while ($i < 23){
	echo $i++;
}

**
while ($i < 23):

	echo $i++'

endwhile;

**
do{
	
	echo $i++;

} while ($i < 20);


**
$array = array("abdou", "abdou" )
foreach ( $array as $value ){
	echo $value
}

** 
foreach ( $array as $key => $value){
	echo $key . $value;
}



-------- function ----------

**
function sayHello($arg1 = "defult", $arg2 = "defult"){
	return //code
}

sayHello("hello", "world");			// function not isensitive for latter uppercase



------- Array ------

** index Array

$myArray = array(val1, val2, val3);

print_r($myArray);			// show all array 

echo $myArray[2]			// show custem index of array

cont($myArray)				// show the length of array
 
##
$myArray[] = "val1";		// declar this is array and put the value in it
$myArray[] = "val2";		// add the value in the array
$myArray[] = "val3";

##
$myArray = array(val1, val2, array(othval1, othval2, othval3), val3);

$myArray[2][3]; 


** Associative Array

 $myarray = array(
	key => value,
	key => value,
	key => value
 )
 
 $myarray[key] = value			// add value in array
 
 foreach ($myarray as key => value){
	echo key . value
 }
 
** Search in Array

ray(value, $Array, sonsitiveOfType)		// check if value is in the array, and return boolean

array_search(value, $Array, sonsitive)			// check if value is in array, and return the index

array_key_exists(index, $Array)					// check if key is in the array, return boolean


** Add value in the Array

$Array[] = value;							// add value in end

$array[key] = value;						// add value to asssociatvie array
$array += [key => value]

array_push($Array, value1, value2);			// add the values or array in end, just include value not ($key => $value) 
array_unnshift($Array, value1, value2); 	// add the values in beginer


** Deleat value in Array

array_pop($Array)						// deleat the last value in array

array_shift($Array) 					// deleat the first value in array


** Sort Array

sort($Array, sortType);					// sort array for index array
			SORT_REGULAR				// type defult is alphabet
			SORT_STRING
			SORT_NUMERIC
			
rsort($Array, sortType					// sort array and revers it

asort($Array, sortType)					// sort the value of array for associative array 
arsort($Array, sortType)				// sort the value of array reverse for associative array 

ksort($Array, sortType)					// sort the key of array for associative array
krsort($Array, sortType)				// sort the key of array reverse


** Reverce & shuffle 

array_reverse($Array, preserve(bool))			// reverce the array from the last to first return other array
												// preserve for save key of value or not

shuffle($Array)									// shuffle array randome return boolean


**** Auther

array_fill(index, length ,value)				// make array from index(index) the length is (number) and the value is (value), return array

array_sum($Array)								// sum the value (just number) of array

array_rand($Array, num)							// make array number fo it(num) get random index from array  

array_unique($Array, sortType)					// deleat the repeat value and ther key in the array
												// type shoud be REGULAR_STRING [defult] for not error
count($str);									// length of array

-------- String ----------

explode(Seprator[req], String, limit)			// convert string to array and the value is seperated with (seperator)
												// and the (limite) is the max index of new array, if it is negative dont inclue the last(-1) or the 2 last(-2)

str_split(string, length)						// make array from each (lenght) latter
chunk_split(string, length[defult: 76], end)	// make string from each(length) and sepereat from (end)[defult= \n]

parse_url($link, component)				 
				PHP_URL_HOST, 		PHP_URL_SCHEME, 
				PHP_URL_PORT, 		PHP_URL_PATH,
				PHP_URL_USER, 		PHP_URL_PASS,
				PHP_URL_QUERY 		PHP_URL_FRAGMENT

parse_str(string[url], array)					// make array from url(string)



implode(seprator, Array) 						// make string from array
join(seproatr, Array)							// the same implode()

str_shuffle(string)								// shuffle the later of string

strrev(string)									// reverse string

str_repeat(string, repeat)						// repeat string (repeat) times

strtolower(string)								// convert (string) to lower case
strtoupper(string)								// convert (string) to upper case

lcfirst(string)									// convert just the first later in (string) to lower case
ucfirst(string)									// convert just the first later in (string) to upper case

ucwords(string)									// conver every first world in (strin) to uppercase

strlen(string)									// length of string

str_word_cont(string, format, char[string])		// (format= 0) cont the number of world, and don't include carachter
												// (format = 1) make array contain world, the index is ordering to up
												// (fromat = 2) make array contain world, the index same index of world in siting
												// (char) include the charackter in string


str_replace(search, repleace, $str, $cont)		// repleace the (serach) from (str)[can be array] and put (replace)
												// (search) can be array, (repleac) can also be array and it is same index of (search)
												// and the (cont) is output, it is the number of replace

strpos(string, search, offset)					// search the index of (search) in (string), begein from (offset)
stripos(string, search, offset)					// same strpos but (search) is not insonsetive
strrpos(string, search, offset)					// same strpos but the search begin from right
strripos(string, search, offset)				// same strops but is not isonsitive and begin from right

strstr(string, search, befor[bool])				// search the (string) and cut it, include before that (search)
												// (befor = true) cut and include after the (string) and don't include the serach
												
stristr(string, search, befor[bool])			// same strstr but not isonsitive
strchr(string, search, befor[bool])				// same strstr

substr(string, star[num], length[num])			// cut (string) begin (star) to the length is (length)

substr_cont($string, search, star[num], length[num])	//cont, star with (star) and search (search) of length

******

addslashes(string)								// add back slach for (') and (")
stripslashes(string)							// delet back slash for (') and (")

strip_tags(string, allow) 						// delete tags form (string) and allow (allow)("<br><i>">)

nl2br(string, xhtml[bool])						// convert (\n) to (<br />) tage, if true make (<br>)

trim(string)									// delete from both sid the [\0(null)  \t(Tab)  \n(new line)  \r(carriage return)  (vertical Tab) ]
trim(string, charac)							// delete the (character) from left and right of (string)

ltrim(string)									// delete from left
rtrim(strin)									// delete from rigth

strcmp(string1, string2)						// compair banary the length of (strin1) and (string2)
strncmp(string1, string2, length[num])			// same strcmp() but the first[length]

substr_compare(string1, string2, posStar, length, case) 	// compair banary (string1) and (strin2)

rand(star, end)		// get number from 'star' to 'end'

isset($var);				// if $var is declarate
is_numeric($var) 			// if $var is number

intval($val, Base);				// return number from $val

boolval() - Get the boolean value of a variable
floatval() - Get float value of a variable
strval() - Get string value of a variable
settype() - Set the type of a variable




---------- File System ---------

__FILE__					// url of file of code
__DIR__						// url of diroctery
__LINE__					// line of code


file_exists($file) 					// if the file exist
is_writable($file)					// if file writable

								

is_dir(name)						// if directory is exists

mkdir(name)							// creat directory name (name)
rmdir(name)							// delete directory (name)

dirname($file);						// return parent directory path name
basename(path, suffex)				// return the file name, if (suffex) is true don't include the prefix, else included

chmod($file, mode)					// chage permition mode 
			0444: readonly
			0755: readWrit

file_put_contents($file, content, mode, context)	// writ (content) in ($file), if it is not found creat and writ 
									FILE_APPEND		// don't overide
									LOCK_EX			// lock the file
									FILE_USER_INCLUDE_PATH
									
file_get_contents(path, include_path, context, offset, max_length)	// get content of file or url

copy(oldfile, newfile); 					// copy file from (oldfile) and past in (newfile), if it is exists overwrite

rename(oldname, newname, context) 			// rename and deplace of file or directory

pathinfo(path, options) 					// returne array info of file [dirname, basename, extension, filename]
				PATHINFO_FILENAME
				PATHINFO_DIRENAME
				PATHINFO_BASENAME ...

unlink(filename, context)					// delete file 

rmdir(directory)							// delete directory if empty

scandir(diroc, sort, context)				// return array show file name in diretory
				SCANDIR_SORT_DESCENDING
				SCANDIR_SORT_NONE

fopen(filename, mode, include_path, context)	// open file .[handel line in end: (unix: \n) (wind: \r\n) (max: \r)
				"r" 		// read only, star from beginning must be existes, overide jus his content
				"r+" 		// same"r" and writ
				"w"			// writ only and overide all  and if not existes created
				"w+"		// same"w" and read 
				"a"			// write only not overide, star from end and if not existes created
				"a+"		// same"a" and read
				"x"			// write only, creat new file if existes show error
				"x+" 		// write and read

fopen("ftp://user:pass@domain/linkOfFile", mode)	// open file in FTP 

fread(handle, length[byte])							// return content of file but max is (length)

filsize(filename)									// return size of file

fwrite(handle, string, length)						// writ (strin) in file

fseek(handle, offset, whence)
						SEEK_SET		// defult, Set position equal to offset bytes.
						SEEK_CUR		// Set position to current location plus offset.
						SEEK_END 		// Set position to end-of-file plus offset.

fclose(handle)							// close file handele.


-------- Auther ------------

include "";				// include file in page

include_once ""			// include file just once 

require ""; 			//  include file page but not compleat read code
require_once ""; 		// include but not compleat the code


$GLOBALS['var'] = value				// make or call variable globale



-------- Cookies -----------

count($_COOKIE)					// if cookies enable

setcookie(name, value, expire, path, domain, secure, httponly)		// set cookies in device of client
			expire				// expiration date with secend
			path				// if it is (/) that is global
			domian				// domain
			secure				// only for secure (SSL)
			httponly			// only https can get it

$_COOKIE["nam"]					// get cookie from user

isset($_COOKIE["name"]) 		// if the cookie (name) is exists or not

count($_COOKIE)					// number of cookies in page



session_start();						// star or resume session on server

$_SESSION['nam'] = "value";				// set

$_SESSSION								// return array show all session value


session_unset();						// unset session
session_destroy();						// end session on server

// file confige (php.ini) have session config in line 1400

session_get_cookie_params($timlif, $path, $host, $ifHttpOnly, $ifSecurHttps)
session_set_cookie_params()				// set config of session parames
session_name()							// set the name of session id
session_regenarate_id()					// rewrit id of session
session_save_path()						// 




$_SERVER['SERVER_NAME']					// get the server name
$_SERVER['HTTP_HOST']					// same SERVER_NAME

$_SERVER['PHP_SELF']					// go the curron page
$_SERVER['DOCUMNET_ROOT']				// get the root of http server

$_SERVER['SERVER_ADDR']					// IP address of the server under which the current script is executing.
$_SERVER['SERVER_PORT']					// port of server used

$_SERVER['REQUEST_METHOD']				// the method of send data return: [POST , GET]	
$_SERVER['HTTP_REFERER']				// get the link you come from

$_SERVER['QUERY_STRING']				// string from url after (?) [?name=abdou&list=23&age=12]
$_SERVER['REQUEST_URI']					// get all path URL

$_GET['name']							// the name in url after (?)
$_POST['name']							// get data from (form) with POST method
$_REQUEST['name']						// same POST and GET



phpinfo();
*******

sleep(sec)							// delay after (sec) seconde
usleep(microSec)					// delay with microsecend
time_sleep_until(time() + 5)		// sleep until at 


exit(string);							// exit script, and if have error show in (string)
die(message)							// same exit

uniqid(prefix, morEnt[bool])			// randome id unique id with (10 carach)
										// prefix befor inique id
										// (morEnt) if true get id more randome with (23 carach)


==== cipher ===========

openssl_encrypt(
    string $data,				// data to encrypt
    string $cipher_algo,		// algo
    string $passphrase,			// 
    int $options = 0,
    string $iv = "",
  ): string|false


function DelayTime($ms){ 
    $now = microtime();
    $finishtime = ($now + $ms);

    while($now < $finishtime){ 
        $now = time();
        if($now >= $finishtime){ break; }
    }
    return true;
}


-------- Mail-------

mail(to, Subjuct, message, from, parameter);


	$to      = 'nobody@mail.com, somone@mail.com';
	$subject = 'Subject';
	$message = 'hello';
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: My name <webmaster@mail.com>' . "\r\n";
	$headers .= 'Cc: myboss@example.com' . "\r\n"; 

	mail($to, $subject, $message, $headers);

------ Date -----------

time();								// show time whith milisecond

date(format, timeStamp);			// (timestamp) the time would your to show format, defult is time();
	form-day:
				d: 01 to 31				j: 1 to 31
				D: Mon through Sun		l: Sunday through Saturday
				S: st, nd, rd or th
	for-month	
				M: Jan through Dec		F: January through December
				m: 01 through 12		n: 1 through 12
	for-yers	
				Y: 2022					y: 22
				
	for-time
				a: am or pm				A: AM or PM
				h: hour 01 through 12	g: hour 1 through 12
				H: hour 00 through 23	G: hour 0 through 23
				i: minit 00 to 59		s: secend 00 through 59
				
	timezone	
				e: UTC, GMT, Atlantic/Azores
				P: +02:00
				c: 2004-02-12T15:19:21+00:00
				
strtotime(date, timstamp)
	dateString
			now	,  +1 minit,  +3 hours,  +1 day,  +4 week,  +1 mounth,   +4 year
			+2 week 3 days 6 hours 10 min
			next week,  next monday
			last friday


	echo date("jS F, Y", strtotime("11.12.10"));
			// outputs 10th December, 2011

	echo date("jS F, Y", strtotime("11/12/10"));
			// outputs 12th November, 2010

	echo date("jS F, Y", strtotime("11-12-10"));
			// outputs 11th December, 2010 
	
	

------- Filter --------------


filter_var(var, filter_type, options)		// filter input fieald
											
  eg:	filter_var($str, FILTER_VALIDATE_INT, array(
			'option' => array("min_rang" => 1, "max_rang" => 99),
			'flags' => FILTER_FLAG_ALLOW_OCTAL
		));

**** validat filters

-FILTER_VALIDATE_BOOLEAN						// Returns true only for "1", "true", "on" and "yes". Returns false otherwise.
 FILTER_VALIDATE_BOOL
						
			flage: 	FILTER_NULL_ON_FAILURE	//return false only for "0", "false", "off", "no", and "", and null is returned for all non-boolean values.

-FILTER_VALIDATE_EMAIL
			flage:  FILTER_FLAG_EMAIL_UNICODE,
					FILTER_NULL_ON_FAILURE
					
-FILTER_VALIDATE_INT
			option:	min_range,
					max_range
					
			flage:	FILTER_FLAG_ALLOW_OCTAL, 
					FILTER_FLAG_ALLOW_HEX, 
					FILTER_NULL_ON_FAILURE
					
-FILTER_VALIDATE_FLOAT
-FILTER_VALIDATE_URL


***** sanitize filters

-FILTER_SANITIZE_STRING
-FILTER_SANITIZE_NUMBER_FLOAT
-FILTER_SANITIZE_NUMBER_INT
-FILTER_SANITIZE_EMAIL
-FILTER_SANITIZE_URL



========== OOP ===================

class myobj {					
	
	public $name = "uname";
	public $age = 20;				// set propertie named age in class
	private $pass;					// set propertie private
	
	const MYNAME = "SAMI";
	
	public function funName($n, $a) {		// set method in calss
	
		echo $this->name;			// get vaiable of object or class
		echo self::MYNAME			// get constanse of class
		
		$this->name = $n;
		$this->age = $a;
	}
	final public function funName() {		// this function cant overide
		
	}
	abstract public function sayBy(){		// function can't be have body just for inherite
		
	}
	
	public function __toString() {				// function to retrun string if call
		return "welcome world";		
	}
}

echo myobj::MYNAME;					// print constant out class with class name
echo $main::MYNAME;					// print constant out class with object name

$main = new myobj();				// get

$main->funName("abdou", 34);		

class secObj extends myObj {
	//
}
final class namClass { 			// cant inherit this class
	//
}

abstract class abstrClass {        // can't creat object from, but make to inherit from other class
	abstract public function sayHello();
}
class className extends abstrClass {
	sayHello(){			//myst be declair abstract function
		
	}
}
===== My SQL ==========


$dsn = "mysql:host=localhost;dbname=abdou";
$user = "root";
$pass = ""; 

$conect = new PDO($dsn, $user, $pass);
mysql -u root -p password			// run to the my sql file(xampp/mysql/bin)


=== connertion PDO to mySQL

	$dsn  = "mysql:host=localhost;dbname=shop";
    $user = "root";
    $pass = "";
	
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    );

    try {
        $con = new PDO($dsn, $user, $pass, $option);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "failded to connect" . $e->getMessage ;
    }

---- 

	$stmt = $con->prepare(" 	// SQL syntax	");	// prepert the statment
	$stmt->bindParam('var', value)					// link the var to valu  [ can be use excute(array('var' => vl)) ]
	$stmt->execute();

	$stmt->rowCount();				// output show how much is executed
	$stmt->fetch();					// show first row
	$stmt->fetchAll();				// show all row 
	$stmt->fetchColumn();			// show value of first column


----- Variable ------

Tiny	integer		=> max charac 4   [-128]
Samll 	integer 	=> max charac 6   [-32767]
Medium	integer 	=> max charac 9	  [-8388608]
Int 				=> max charac 11  [-2147483647]
Big 	interger	=> max charac 20  [-9223372036854776800]


Date				=> YYY-MM-DD
datetime 			=> YYY-MM-DD HH:MI:SS
Timestamp 			=> YYY-MM-DD HH:MI:SS
Time 				=> HH:MI:SS
Year 				=> YYYY  |  YY

char				=> store fixed value (static) max: 255
varchar				=> store variab value (dunamic) max: +255

Text 				=> store string
Blob 				=> binary large object

enum				=> chose on in list
set 				=> shose on or more in list

------- command sql --------


CREATE DATABASE name;				// creat database, show error if is exists
CREATE DATABASE IF NOT EXISTS name;	// creat database if note exists

DROP DATABASE name;					// delete database, show error if not exists
DROP DATABASE IF EXISTS name 		// delete database if exist

SHOW DATABASES;						// show all databases
SHOW DATABASES like "name";

CREATE TABLE name (
	col0 type NOT NULL PRIMARY KEY,
	col1 type NOT NULL,
	col2 type unique,
	col3 type not null unique,
	col4 type ,
	PRIMATY KEY(coname)			// this anothor way to make primary key
);

CREATE TABLE IF NOT EXISTS nameTable;
DROP TABLE IF EXISTS nameTable;

DESCRIBE tableName;					// show info about table
SHOW COLUMNS FROM tableName;		// show info about column in table
SHOW FIELDS FROM tableName;			// show info table

SHOW TABLE STATUS;  				//
SHOW CREATE CODE TABLE nameTable; 	// show the code it creat the table

RENAME TABLE nameTabl TO namTabl, authTabl TO authTabl; 	// rename two table in one line

ALTER TABLE namTable ENGINE = MYISAM;	// change ENGINE of table

ALTER TABLE namTable ADD colName type;						// add column in end
ALTER TABLE namTable ADD colName type AFTER colName;		// add column after (colName)
ALTER TABLE namTable ADD colName type FIRST;

ALTER TABLE namTable ADD colName type NOT NULL;
ALTER TABLE namTable ADD colName type NOT NULL UNIQUE;

ALTER TABLE namTabl DROP colName ;							// delte column i tabe

ALTER TABLE namTab CHANGE colnume colnume type AFTER colname;	// change name and type and location of columne

ALTER TABLE namTab MODIFY colname type;			// modifi type of columne

ALTER TABLE namTAb RENAME nameTab;

ALTER TABLE namTabl MODIFY colname type, change colname colname type

ALTER TABLE namTable CONVERT TO CHARACTER SET utf8;

ALTER TABLE namTab ADD UNIQUE(colName);								// make column unique
ALTER TABLE namTab DROP INDEX colnam;								// make column not unique 
ALTER TABLE namTab ADD PRIMARY KEY(colname);						// make column primary key
ALTER TABLE namTab DROP PRIMARY KEY; 								// deleat pramery key from

SHOW INDEXES FROM namTab;

CREATE TABLE namTab (
	col1 int NOT NULL PRIMARY KEY,
	PRIMARY KEY(col1),
	[ CONSTRAINT constrainname ] FOREIGN KEY(authCol) REFERENCES nameTab(colnam) [ ON DELETE CASCADE ON UPDATE CADCADE ];
)

ALTER TABLE namTabl DROP FOREIGN KEY constraintname;							// deleat relation in table

ALTER TABLE namTabl ADD CONSTRAINT constrainname FOREIGN KEY (colnam) REFERENCES authTabl(colname) ON DELETE CASCADE ON UPDATE CASCADE;
						
						[CASCADE]		
						[SET NULL]
						[NO ACTION]
						[RESTRICT]
	
SELECT colname FROM namtabl;							// select values of columne from table
SELECT colnam, colnam2, colname3 FROM namTab;

SELECT LEFT(colname, length) FROM namtabl;				// select special value in left of column from table 
SELECT RIGHT(colname, length) FROM namtabl;
SELECT LEFT(colname, position, length FROM namtabl;

SELECT LENGTH(colnam) FROM namTab; 						// show lenght (bit) of column value
SELECT CHAR_LENGTH(colnam) FROM namTabl;				// show charachter length

SELECT COUNT(colName) FROM namTabl						// show count of column in Table

SELECT colname, LENGTH(colnam) AS choseName FROM namTabl;	// show column (colname) and length of value as name (choseName)
SELECT col1, col2 FROM namTab ORDER BY col2 ASC;			// show element ordering 
										ASC (to upp) ,
										DESC(to down)

SELECT UPPER(colname) FROM namTab; 		UCASE(string)
SELECT LOWER(colname) FROM namTAb;		LCASE(string)

REPEAT(col, numRepeat);									// REPEAT VALU IN COLUMN
REPLACE(col, from, to); 								// replace value to auther value on column
REVERSE(col);											// reverse value of column


UPDATE namTab SET colname = REPLACE(colname, val1, val2); 		// replace in column val1 to val2				

UPDAT namTab SET colname = 'valu'; 								// updat all value in column whith 'valu'


CONCAT(String, String, String);						
CONCAT(Separator, String, String)

INSERT(String, Position, length, NewString)

TRIM(method char FROM String
		method: LEADING | TRAILING | BOTH
		char: special charachter deleted
LTRIM(String);
RTRIM(String);

LPAD(String, length, PadString);						// add special charachter if the string less than length 
RPAD(String, length, PadString));

CEIL(num)									// round to up eg: ceil(1.1) = 2
FLOOR(num)									// round to down eg: floor(1.9) = 1
ROUND(num, afterNum)						// round eg round(1.499) = 1 ; round (1.5) = 2; round(1.4599, 2) = 1.46 
TRUNCATE(num, afterNum)						// delete number afterNum eg: truncate(1.4599, 2)= 1.45 ;
POW(num, pow);								// exponosial of number
MOD(num, mod)								// modules of number

CURTIME()									// HH:MM:SS
	CURRENT_TIME()
	CURRENT_TIME

CURDATE()									// YYYY-MM-DD
	CURRENT_DATE()
	CURRENT_DATE

NOW()										// YYYY-MM-DD HH:MM:SS 
	CURRENT_TIMESTAMP()
	CURRENT_TIMESTAMP

DAYNAME(Date)								// day name
DAYOFMOUNTH()[DAY()]						// day number in month
DAYOFWEEK(Date)								// day number in week
DAYOFYEAR(Date)								// day number in year

MONTH(Date)									// number of month in year
MONTHNAME(Date)								// name of month
HOUR(Date)									//   
MINUTE(Date)


INSERT INTO `namTabl` (`All_visit`, `pc`, `mobile`) VALUES ('1', '1', '0');

UPDATE namTab SET namCol = 'value', namCol = "value" WHERE namTab,namCol = 'value';			// upsat

DELETE FROM namTab WHERE namTab.colname = "value";							// delete row in column whith special value, must column is unique

SELECT * FROM namTab JOIN authTab ON authTab.colnam = namTab.colnam WHERE authTab.colnam = value


