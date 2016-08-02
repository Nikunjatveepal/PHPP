
<?php
// 1) Php version display
//phpinfo();

// 2) Php string variable
//$string_var = 'This is a simple text variable. I\'ll use this in coding';
//echo $string_var;

// 3) $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within a HTML documen

?>

<!-- <?php $title_var = 'PHP Tutorial'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title_var; ?></title>
    </head>
    <body>
        <h3><a href="#"><?php echo $title_var; ?> </a></h3>
    </body>
</html> -->

<?php
// 4) Create a simple HTML form and accept the user name and display the name through PHP echo statement
?>

<!--<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Form</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="name">
            <input type="submit" value="submit your form" >
        </form>
    </body>
    
</html>
<?php
 (isset($_POST['name']))?$name = $_POST['name']:$name = "";
?>
<?php echo "Hello $name "; ?>
-->

<?php
// 5) Write a PHP script to get the client IP address
//$client_ip = $_SERVER['SERVER_NAME'];
//echo $client_ip;
?>

<?php
// 6) Write a simple PHP browser detection script. 

//$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
//echo $HTTP_USER_AGENT;
?>

<?php
// 7) Write a PHP script to get the current file name

//$file_name = $_SERVER['PHP_SELF'];
//echo $file_name;
//
//echo $current_file_name;
//$current_file_name = __FILE__;        
?>

<?php
// 8) Write a PHP script, which will return the following components of the url 'http://www.w3resource.com/php-exercises/php-basic-exercises.php'.

$url = 'http://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);
// scheme mean protocol
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n";
?>

<?php
// 9) Write a PHP script, which change the color of first character of a word.
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;

?>

<?php
// 10) Write a PHP script, to check whether the page is called from 'https' or 'http'.
if(!empty($_SERVER['HTTPS'])){
    echo 'https is enable';
}
else {
    echo 'https is desable';
}
?>

<?php
// 11) Write a PHP script to redirect a user to a different page.

$url = 'https://www.google.com';

//header('Location: http://www.google.com');
//header("Location: $url");
?>

<?php
// 12) Write a simple PHP program to check that emails are valid.

//$email = 'niksmakwana008@gmail.com';
//if(filter_var($email, FILTER_VALIDATE_EMAIL))       
//{
//    echo "$email".' = Valid';
//}
//else
//    {
//    echo "$email".' = Invalid';
//}
?>

<?php
// 13) Write a e PHP script to display string, values within a table.
//$a = 10;
//$b = 20;
//$c = 20;
//
//echo "<table border=1 cellspacing=5 cellpading=5>";
//    echo "<tr><td>Nikunj</td><td> $a </td></tr>";
//    echo "<tr><td>Nikunj</td><td>$b</td></tr>";
//    echo "<tr><td>Nikunj</td><td>$c</td></tr>";
//echo "</table>";
?>
<?php
// 14) Write a PHP script to display source code of a webpage
//$all_line = file('https://www.google.com');
////print_r($all_line);
//foreach($all_line as $line_no=>$line){
////  /echo $line_no;
//  echo "Line number --{$line_no}".htmlspecialchars($line);
//}
?>
<?php
// 15) Write a PHP script to get last modified information of a file
//basename — Returns trailing name component of path
//filemtime — Gets file modification time
$file_name = basename($_SERVER['PHP_SELF']);
$filetime = filemtime($file_name);

echo "</br> Last Modify Date  ".date('l,dS F, Y, h:ia',$filetime);
?>

<?php
// 16) Write a PHP script to count lines in a file.
$current_file_name = basename($_SERVER['PHP_SELF']);
$count_line = count(file($current_file_name));
echo $count_line."</br>";
?>

<?php
// 17) Write a PHP script to print current PHP version.
echo phpversion();
// prints e.g. '2.0' or nothing if the extension isn't enabled  
echo phpversion('tidy')."\n";
?>

<?php
// 18) Write a PHP script to delay the program execution for the given number of seconds.
// current time
  echo date('h:i:s') . "\n";
  // sleep for 5 seconds
  //sleep(15);
  // wake up
  echo date('h:i:s')."\n";
?>

<?php
// 19)
$d ='A00';
echo "</br>";
for($i=0;$i<=5;$i++)
{
   echo $d++."\n";
   echo "</br>";
}
?>

<?php 
// 21) 
function trinary_test($n)
{
   $r = $n > 30 ? "greater then 30": ($n > 20 ? "Greater then 20" : ($n > 10? "Greater then 10" :"Input a number atleast greater then 10!"));

   echo $n.":".$r."\n";
}
trinary_test(45);
echo "</br>";
?>
<?php  
// 22) 
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  
  echo $full_url."\n";  
  echo "</br>";
?> 

<?php  
// 23)
if (version_compare(PHP_VERSION, '6.0.0') >= 0) {  
echo 'I am at least PHP version 6.0.0, my version: ' . PHP_VERSION . "\n";  
}  
if (version_compare(PHP_VERSION, '5.3.0') >= 0) {  
echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . "\n";  
}  
  
if (version_compare(PHP_VERSION, '5.0.0', '>=')) {  
echo 'I am using PHP 5, my version: ' . PHP_VERSION . "\n";  
}  
  
if (version_compare(PHP_VERSION, '5.0.0', '<')) {  
echo 'I am using PHP 4, my version: ' . PHP_VERSION . "\n";  
}  

  echo "</br>";
?>

<?php
// 24) 
echo 'Current script owner: ' . get_current_user()."\n";
echo "</br>";
?>

<?
// 25) 
// getenv() gets the value of an environment variable
$rd = getenv('DOCUMENT_ROOT');
echo $rd."\n";
echo "</br>";
?>

<?php  
echo php_uname()."\n";  
echo PHP_OS."\n";  
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {  
echo 'This is a server using Windows!';  
} else {  
echo 'This is a server not using Windows!'."\n";  
}  
echo "</br>";
?> 


<?php  
// Create a temporary file in the temporary   
// files directory using sys_get_temp_dir()  
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');  
echo $temp_file."\n";  
echo "</br>";
?> 

<?php  
echo "<pre>";
print_r(get_extension_funcs("JSON"));  
echo "</br>";
echo "\n";  
print_r(get_extension_funcs("XML"))."\n";
echo "</pre>";

echo "</br>";
?> 

<?php  
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod())."\n";  
?> 
